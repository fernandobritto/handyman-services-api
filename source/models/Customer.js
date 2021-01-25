import Sequelize, { Model } from 'sequelize'

export default class Customer extends Model{
    static init(sequelize){
        super.init({
            name: {
                type: Sequelize.STRING,
                defaultValue: '',
                validate: {
                    notEmpty: {
                        msg: 'The name field cannot be empty'
                    }
                }
            },
            email: {
                type: Sequelize.STRING,
                defaultValue: '',
                validate: {
                    isEmail: {
                        msg: 'The email is not valid'
                    }
                }
            },
            phone: {
                type: Sequelize.INTEGER,
                defaultValue: '',
            },
            cellphone: {
                type: Sequelize.INTEGER,
                defaultValue: '',
            },
            address: {
                type: Sequelize.STRING,
                defaultValue: '',
                validate: {
                    notEmpty: {
                        msg: 'The address field cannot be empty'
                    }
                }
            },
            zipcode: {
                type: Sequelize.STRING,
                defaultValue: '',
                validate: {
                    notEmpty: {
                        msg: 'The zipcode field cannot be empty'
                    }
                }
            },
        },{ sequelize })

        return this
    }

    static associate(models){
        this.belongsTo(models.Worker, { foreignKey: 'worker_id', as: 'worker' })
    }

}

