const express = require('express')
const WorkerController = require('./controllers/WorkerController')
const CustomerController = require('./controllers/CustomerController')

const routes = express.Router()

routes.get('/workers', WorkerController.index)
routes.post('/workers', WorkerController.store)

routes.get('/workers/:worker_id/customers', CustomerController.index)
routes.post('/workers/:worker_id/customers', CustomerController.store)

module.exports = routes
