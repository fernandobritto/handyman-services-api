import Worker from '../models/Worker'
import Customer from '../models/Customer'

class CustomerController {
    // INDEX
    async index(req, res){
        try {
            const customers = Customer.findAll()
            return res.json(customers)
        } catch (error) {
           return res.json(null)
        }
    }


    // SHOW
    async show(req, res){
        try {
            const customer = await Customer.findByPk(req.params.id)
            return res.json(customer)
        } catch (error) {
            return res.json(null)
        }
    }


    // STORE
    async store(req, res){
        try {
            const {worker_id} = req.params
            const {name,email,phone,cellphone,address,zipcode} = req.body

            const worker = await Worker.findByPk(worker_id)

            if(!worker){
                return res.status(400).json({ error: 'Worker not found' })
            }

            const customer = await Customer.create({
                worker_id, name,email,phone,cellphone,address,zipcode
            })
            return res.status(200).json(customer)

        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }


    // UPDATE
    async update(res, req){
        try {

        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }


    // DELETE
    async delete(){
        try {

        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }
}

export default new CustomerController
