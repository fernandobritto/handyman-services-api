import { Router } from 'express'
const routeWorker = new Router()
import WorkerController from '../controllers/WorkerController'

routeWorker.get('/', WorkerController.index)
routeWorker.get('/:id', WorkerController.show)
routeWorker.post('/', WorkerController.store)
routeWorker.put('/:id', WorkerController.update)
routeWorker.delete('/:id', WorkerController.delete)

export default routeWorker
