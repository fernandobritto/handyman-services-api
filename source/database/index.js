import Sequelize from 'sequelize'
import dbConex from '../config/database'
import Worker from '../models/Worker'
import Customer from '../models/Customer'

const models = [Worker, Customer]
const connection = new Sequelize(dbConex)

models.forEach( model => model.init(connection) )

Customer.associate(connection.models)
