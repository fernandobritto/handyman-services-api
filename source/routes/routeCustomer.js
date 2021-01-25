import { Router } from 'express'
const routeCustomer = new Router()
import CustomerController from '../controllers/CustomerController'

routeCustomer.get('/user/:worker_id/client', CustomerController.index)
routeCustomer.get('/:id', CustomerController.show)
routeCustomer.post('/user/:worker_id/client', CustomerController.store)
routeCustomer.put('/:id', CustomerController.update)
routeCustomer.delete('/:id', CustomerController.delete)

export default routeCustomer
