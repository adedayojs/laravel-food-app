<script>
import FoodItem from '@/Components/FoodItem.vue'

export default {
    data() {
        return {
            menuTab: 'Breakfast',
            loading: false,
            foods: [
                // Replace this with your actual food data from the backend
                {
                    "id": 1,
                    "title": "Eggs Benedict",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 8.99,
                    "image": "./assets/Breakfast/breakfast1.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 2,
                    "title": "Breakfast Sandwich",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 9.99,
                    "image": "./assets/Breakfast/breakfast2.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 3,
                    "title": "Baked Chiken",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 10.99,
                    "image": "./assets/Breakfast/breakfast3.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 4,
                    "title": "Bagel and cream cheese",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 23.99,
                    "image": "./assets/Breakfast/breakfast4.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 5,
                    "title": "Fried Egg Toast Brunch",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 3.99,
                    "image": "./assets/Breakfast/breakfast5.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 6,
                    "title": "Toast Croissant Fried Egg",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 19.99,
                    "image": "./assets/Breakfast/breakfast6.png",
                    "foodType": "Breakfast"
                },
                {
                    "id": 7,
                    "title": "Beef Steak",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 15.99,
                    "image": "./assets/lunch/lunch1.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 8,
                    "title": "Honey with Peppers",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 7.99,
                    "image": "./assets/lunch/lunch2.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 9,
                    "title": "Tarrgaon Rubbed Salmon",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 7.99,
                    "image": "./assets/lunch/lunch3.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 10,
                    "title": "Indian Lunch",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 8.99,
                    "image": "./assets/lunch/lunch4.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 11,
                    "title": "Fried Chicken Bento",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 13.99,
                    "image": "./assets/lunch/lunch5.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 12,
                    "title": "healthy Meal Plan",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 83.99,
                    "image": "./assets/lunch/lunch6.png",
                    "foodType": "Lunch"
                },
                {
                    "id": 13,
                    "title": "Baked Chicken",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 66.99,
                    "image": "./assets/Dinner/dinner1.png",
                    "foodType": "Dinner"
                },
                {
                    "id": 14,
                    "title": "Lemony Salmaon Piccata",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 56.99,
                    "image": "./assets/Dinner/dinner2.png",
                    "foodType": "Dinner"
                },
                {
                    "id": 15,
                    "title": "Garlic Butter Baked Salmon",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 3.99,
                    "image": "./assets/Dinner/dinner3.png",
                    "foodType": "Dinner"
                },
                {
                    "id": 16,
                    "title": "French Fried with Cheese",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 23.99,
                    "image": "./assets/Dinner/dinner4.png",
                    "foodType": "Dinner"
                },
                {
                    "id": 17,
                    "title": "Pork Tenderion",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 12.99,
                    "image": "./assets/Dinner/dinner5.png",
                    "foodType": "Dinner"
                },
                {
                    "id": 18,
                    "title": "Lentil Salad",
                    "description": "Gay one the what walk then she. Demesne mention promise you justice arrived way.Amazing foods are or and increasing to in especially inquietude companions acceptance admiration.Outweigh it families distance wandered ye..",
                    "price": 9.99,
                    "image": "./assets/Dinner/dinner6.png",
                    "foodType": "Dinner"
                }

                // Add more food items as needed
            ],
        };
    },
    computed: {
        filteredFoods() {
            return this.foods.filter((item) => this.menuTab === item.foodType);
        },
    },
    methods: {
        handleMenuTabs(tab) {
            this.menuTab = tab;
        },
    },
    components: {
        FoodItem, // Make sure to register the 'FoodItem' component here
    },
};
</script>
  
<template>
    <section class="my-12 max-w-screen-xl mx-auto px-6">
        <!-- food Menu tab -->
        <div class="flex items-center justify-center space-x-6">
            <p :class="{ 'active_menu_tab bg-primary': menuTab === 'Breakfast', 'menu_tab': menuTab !== 'Breakfast' }"
                @click="handleMenuTabs('Breakfast')">Breakfast</p>
            <p :class="{ 'active_menu_tab bg-primary': menuTab === 'Lunch', 'menu_tab': menuTab !== 'Lunch' }"
                @click="handleMenuTabs('Lunch')">Lunch</p>
            <p :class="{ 'active_menu_tab bg-primary': menuTab === 'Dinner', 'menu_tab': menuTab !== 'Dinner' }"
                @click="handleMenuTabs('Dinner')">Dinner</p>
        </div>

        <!-- all foods -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12">
            <div v-for="item in filteredFoods" :key="item._id">
                <FoodItem v-if="!loading" v-bind="item" />
            </div>
        </div>
    </section>
</template>