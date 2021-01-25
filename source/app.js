import dotenv from 'dotenv'
dotenv.config()

import express from 'express'
import routeWorker from './routes/routeWorker'
import routeCustomer from './routes/routeCustomer'

import './database'

class App {
    constructor(){
        this.app = express()
        this.middlewares()
        this.routes()
    }

    middlewares(){
        this.app.use(express.urlencoded({ extended: true }))
        this.app.use(express.json())
    }

    routes(){
        this.app.use('/user', routeWorker)
        this.app.use('/', routeCustomer)
    }
}

export default new App().app
