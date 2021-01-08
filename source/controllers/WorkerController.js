const Worker = require('../models/Worker')

module.exports = {
    async index(req, res){
        const worker = await Worker.findAll()
        return res.json(worker)
    },

    async store(req, res){
        const { name, email, phone } = req.body
        const worker = await Worker.create({ name, email, phone })
        return res.json(worker)
    }
}
