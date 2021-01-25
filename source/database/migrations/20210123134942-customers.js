'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('cutomers', {
        id: {
            type: Sequelize.INTEGER,
            autoIncrement: true,
            primaryKey: true,
            allowNull: false
        },
        worker_id: {
            type: Sequelize.INTEGER,
            allowNull: false,
            references: { model: 'workers', key: 'id'  },
            onUpdate: 'CASCADE',
            onDelete: 'CASCADE',
        },
        name: {
            type: Sequelize.STRING,
            allowNull: false
        },
        email: {
            type: Sequelize.STRING,
            allowNull: true
        },
        phone: {
            type: Sequelize.INTEGER,
            allowNull: false
        },
        cellphone: {
            type: Sequelize.INTEGER,
            allowNull: true
        },
        address: {
            type: Sequelize.STRING,
            allowNull: false
        },
        zipcode: {
            type: Sequelize.STRING,
            allowNull: false
        },
        created_at: {
            type: Sequelize.DATE,
            allowNull: false
        },
        updated_at: {
            type: Sequelize.DATE,
            allowNull: false
        },
    });
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('cutomers');
  }
};
