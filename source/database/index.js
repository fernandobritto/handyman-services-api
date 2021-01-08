const Sequelize = require('sequelize')
const { username } = require('../config/database')
const dbConfig = require('../config/database')

const Worker = require('../models/Worker')
const Customer = require('../models/Customer')

const connection = new Sequelize(dbConfig)

Worker.init(connection)
Customer.init(connection)

Customer.associate(connection.models)

module.exports = connection
