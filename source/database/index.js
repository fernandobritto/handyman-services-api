const Sequelize = require('sequelize')
const { username } = require('../config/database')
const dbConfig = require('../config/database')

const Worker = require('../models/Worker')

const connection = new Sequelize(dbConfig)

Worker.init(connection)

module.exports = connection
