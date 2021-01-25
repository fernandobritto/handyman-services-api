import Worker from '../models/Worker'

class WorkerController {
    // INDEX
    async index(req, res){
        try {
            const workers = await Worker.findAll()
            return res.status(200).json(workers)

        } catch (error) {
            return res.json(null)
        }
    }

    // SHOW
    async show(req, res){
        try {
            const worker = await Worker.findByPk(req.params.id)
            if(worker){
                return res.status(200).json(worker)
            }else{
                return res.json({
                    message: "This worker ID does not exist"
                })
            }
        } catch (error) {
            return res.json(null)
        }
    }

    // STORE
    async store(req, res){
        try {
            const worker = await Worker.create(req.body)
            return res.status(201).json(worker)
        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }

    // UPDATE
    async update(req, res){
        try {
            if(!req.params.id){
                return res.status(401).json({
                    errors: ['This worker ID does not exist']
                })
            }
            const worker = await Worker.findByPk(req.params.id)

            if(!worker){
                return res.status(401).json({
                    errors: ['This worker does not exist']
                })
            }

            const newInfo = await worker.update(req.body)
            return res.status(200).json(newInfo)

        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }

    // DELETE
    async delete(req, res){
        try {
            if(!req.params.id){
                return res.status(401).json({
                    errors: ['This worker ID does not exist']
                })
            }
            const worker = await Worker.findByPk(req.params.id)

            if(!worker){
                return res.status(401).json({
                    errors: ['This worker does not exist']
                })
            }

            const workerNull = await worker.destroy(req.body)
            return res.status(200).json({
                message: "User deleted successfully"
            })


        } catch (error) {
            return res.status(400).json({
                errors: e.errors.map((err) => err.message)
            })
        }
    }


}

export default new WorkerController
