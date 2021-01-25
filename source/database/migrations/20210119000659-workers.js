'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('workers', {
        id: {
            type: Sequelize.INTEGER,
            autoIncrement: true,
            primaryKey: true,
            allowNull: false,
        },
        name: {
            type: Sequelize.STRING,
            allowNull: false
        },
        email: {
            type: Sequelize.STRING,
            allowNull: false,
            unique: true
        },
        phone: {
            type: Sequelize.INTEGER,
            allowNull: false
        },
        password_hash: {
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

  down: async (queryInterface) => {
    await queryInterface.dropTable('workers');
  }
};
