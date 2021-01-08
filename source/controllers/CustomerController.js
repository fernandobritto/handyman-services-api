const Worker = require('../models/Worker');
const Customer = require('../models/Customer');

module.exports = {
  async index(req, res) {
    const { worker_id } = req.params;

    const user = await Worker.findByPk(worker_id, {
      include: { association: 'customers' }
    });

    return res.json(user.customers);
  },

  async store(req, res) {
    const { worker_id } = req.params;
    const { name, zipcode, address } = req.body;

    const handyman = await Worker.findByPk(worker_id);

    if (!handyman) {
      return res.status(400).json({ error: 'Handyman not found' });
    }

    const customers = await Customer.create({
      name,
      zipcode,
      address,
      worker_id,
    });

    return res.json(customers);
  }
};
