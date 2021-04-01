import Sequelize, { Model } from 'sequelize'
import bcryptjs from 'bcryptjs'

export default class Worker extends Model {
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
                unique: true,
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

            password_hash: {
                type: Sequelize.STRING,
                defaultValue: '',
            },
            password: {
                type: Sequelize.VIRTUAL,
                defaultValue: '',
                validate: {
                    len: {
                        args: [8, 75],
                        msg: 'your password must contain more than 8 characters'
                    }
                }

            }
        },{ sequelize })

        this.addHook('beforeSave', async worker => {
            if(worker.password){
                worker.password_hash = await bcryptjs.hash(worker.password, 8)
            }
        })

        return this

    }

    static associate(models){
        this.hasMany(models.Customer , { foreignKey: 'worker_id', as: 'workers' })
    }

}
