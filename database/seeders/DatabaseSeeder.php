<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'example',
            'email' => 'example@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('blogs')->insert([
            [
                'id_user' => 1,
                'title' => 'Delicious Chocolate Chip Cookies',
                'tagline' => 'Irresistibly Chewy and Loaded with Chocolate!',
                'hastag' => '#ChocolateChipCookies #HomemadeTreats #SweetTooth',
                'image' => 'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
                'content' => 'Indulge in the heavenly taste of homemade chocolate chip cookies. These cookies are soft, chewy, and packed with rich chocolate chips. With just a few simple ingredients, you can create a batch of these irresistible treats in no time. Perfect for satisfying your sweet cravings any time of the day!
                <br>
                Ingredients:
                
                <br>
                All-purpose flour
                <br>
                - Butter
                <br>
                - Brown sugar
                <br>
                - White sugar
                <br>
                - Eggs
                <br>
                - Vanilla extract
                <br>
                - Baking soda
                <br>
                - Salt
                <br>
                - Chocolate chips
                <br>
                
                Instructions:
                
                <br>
                1. Preheat oven to 350°F (175°C) and line a baking sheet with parchment paper.
                <br>
                2. In a mixing bowl, cream together butter, brown sugar, and white sugar until smooth.
                <br>
                3. Beat in eggs one at a time, then stir in vanilla extract.
                <br>
                4. Combine flour, baking soda, and salt; gradually blend into the creamed mixture.
                <br>
                5. Stir in chocolate chips.
                <br>
                6. Drop dough by rounded spoonfuls onto the prepared baking sheet.
                <br>
                7. Bake for 10 to 12 minutes in the preheated oven, or until edges are nicely browned.
                <br>
                8. Allow cookies to cool on baking sheet for 5 minutes before transferring to a wire rack to cool completely.
                <br>
        
                Enjoy these delectable chocolate chip cookies with a glass of milk or a cup of coffee!'
            ],
            [
                'id_user' => 1,
                'title' => 'Savory Beef Stew',
                'tagline' => 'Hearty Comfort Food for Chilly Nights',
                'hastag' => '#BeefStew #ComfortFood #WinterWarmth',
                'image' => 'chad-montano-eeqbbemH9-c-unsplash.jpg',
                'content' => 'Warm up with a bowl of hearty beef stew on chilly winter nights. This comforting dish is packed with tender chunks of beef, savory vegetables, and flavorful broth. Slow-cooked to perfection, it\'s sure to satisfy your hunger and warm your soul.
        
                Ingredients:
        
                 Beef stew meat
                - Potatoes
                - Carrots
                - Celery
                - Onion
                - Garlic
                - Tomato paste
                - Beef broth
                - Red wine
                - Bay leaves
                - Thyme
                - Salt and pepper
        
                Instructions:
        
                1. Season beef stew meat with salt and pepper.
                2. In a large pot or Dutch oven, brown the meat in batches until evenly browned on all sides. Remove and set aside.
                3. In the same pot, sauté onions, garlic, carrots, and celery until softened.
                4. Stir in tomato paste and cook for another minute.
                5. Return the browned meat to the pot and add beef broth, red wine, bay leaves, and thyme.
                6. Bring to a simmer, then cover and cook over low heat for 2-3 hours, or until the meat is tender.
                7. Add potatoes and continue to cook until tender.
                8. Season with salt and pepper to taste.
        
                Serve hot with crusty bread for dipping and enjoy the cozy flavors of this classic beef stew!'
            ],
            [
                'id_user' => 1,
                'title' => 'Refreshing Strawberry Smoothie',
                'tagline' => 'Delightfully Sweet and Nutritious',
                'hastag' => '#StrawberrySmoothie #HealthyLiving #FruitLove',
                'image' => 'joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg',
                'content' => 'Start your day on a refreshing note with a delicious strawberry smoothie. Packed with vitamins, minerals, and antioxidants, this vibrant drink is not only tasty but also nutritious. It\'s the perfect way to kickstart your morning or enjoy as a midday pick-me-up.
        
                Ingredients:
        
                 Fresh strawberries
                - Banana
                - Greek yogurt
                - Honey
                - Milk or almond milk
                - Ice cubes
        
                Instructions:
        
                1. Wash and hull the strawberries.
                2. Peel and slice the banana.
                3. In a blender, combine the strawberries, banana, Greek yogurt, honey, milk, and ice cubes.
                4. Blend until smooth and creamy.
                5. Taste and adjust sweetness if necessary by adding more honey.
                6. Pour into glasses and serve immediately.
        
                Enjoy the sweet and tangy flavors of this refreshing strawberry smoothie!'
            ],
            [
                'id_user' => 1,
                'title' => 'Homemade Margherita Pizza',
                'tagline' => 'Classic Italian Pizza Made with Love',
                'hastag' => '#MargheritaPizza #ItalianCuisine #HomemadePizza',
                'image' => 'kelvin-t-AcA8moIiD3g-unsplash.jpg',
                'content' => 'Transport yourself to the streets of Italy with a homemade Margherita pizza. With its simple yet flavorful toppings, this classic pizza is a favorite among pizza lovers worldwide. Made with fresh tomatoes, mozzarella cheese, and basil, it\'s a delightful combination of flavors that will tantalize your taste buds.
        
                Ingredients:
        
                 Pizza dough
                - Fresh tomatoes
                - Fresh mozzarella cheese
                - Fresh basil leaves
                - Olive oil
                - Salt and pepper
        
                Instructions:
        
                1. Preheat your oven to the highest temperature (usually around 500°F or 260°C).
                2. Roll out the pizza dough into a circle on a floured surface.
                3. Place the rolled-out dough onto a pizza stone or baking sheet lined with parchment paper.
                4. Drizzle olive oil over the dough and spread it evenly.
                5. Slice the tomatoes and arrange them evenly over the dough.
                6. Tear the fresh mozzarella cheese into small pieces and scatter them over the tomatoes.
                7. Season with salt and pepper to taste.
                8. Bake in the preheated oven for 10-12 minutes, or until the crust is golden brown and the cheese is bubbly.
                9. Remove from the oven and sprinkle fresh basil leaves over the pizza.
        
                Slice and serve hot, and savor the authentic flavors of homemade Margherita pizza!'
            ],
            [
                'id_user' => 1,
                'title' => 'Creamy Chicken Alfredo Pasta',
                'tagline' => 'Rich and Indulgent Pasta Dish',
                'hastag' => '#ChickenAlfredo #PastaLovers #ComfortFood',
                'image' => 'alina-chernysheva-M0QYXzfTXkk-unsplash.jpg',
                'content' => 'Treat yourself to a luxurious dinner with creamy chicken Alfredo pasta. This indulgent dish features tender chicken breast pieces tossed in a rich and velvety Alfredo sauce, served over perfectly cooked pasta. It\'s a decadent meal that\'s sure to impress your family and friends.
        
                Ingredients:
        
                 Chicken breast
                - Fettuccine pasta
                - Heavy cream
                - Butter
                - Garlic
                - Parmesan cheese
                - Salt and pepper
                - Parsley (for garnish)
        
                Instructions:
        
                1. Cook the fettuccine pasta according to package instructions until al dente. Drain and set aside.
                2. Season chicken breast pieces with salt and pepper.
                3. In a large skillet, melt butter over medium heat and add minced garlic.
                4. Add the seasoned chicken breast pieces and cook until golden brown and cooked through.
                5. Remove the chicken from the skillet and set aside.
                6. In the same skillet, add heavy cream and bring to a simmer.
                7. Gradually stir in grated Parmesan cheese until melted and smooth.
                8. Return the cooked chicken to the skillet and toss to coat in the Alfredo sauce.
                9. Add the cooked fettuccine pasta to the skillet and toss until evenly coated.
                10. Serve hot, garnished with freshly chopped parsley.
        
                Enjoy the creamy and indulgent flavors of this chicken Alfredo pasta!'
            ],
        ]);
    }
}
