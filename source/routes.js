const express = require('express')
const WorkerController = require('./controllers/WorkerController')

const routes = express.Router()

routes.post('/workers', WorkerController.store)

module.exports = routes
