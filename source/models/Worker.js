const { Model, DataTypes } = require('sequelize')

class Worker extends Model
{
    static init(connection){
        super.init({
            name: DataTypes.STRING,
            email: DataTypes.STRING,
            phone: DataTypes.STRING,
        }, {
        // connection to the database
            sequelize: connection
        })
    }
}

module.exports = Worker
