const { Model, DataTypes } = require('sequelize')

class Customer extends Model
{
    static init(connection){
        super.init({
            name: DataTypes.STRING,
            zipcode: DataTypes.STRING,
            adress: DataTypes.STRING,
        }, {
        // connection to the database
            sequelize: connection
        })
    }

    static associate(models) {
        this.belongsTo(models.Worker, { foreignKey: 'worker_id', as: 'worker' });
      }
}

module.exports = Customer
