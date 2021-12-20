<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'books'
        ]);

        $category2 = Category::create([
            'name' => 'movies'
        ]);

        $category3 = Category::create([
            'name' => 'comics'
        ]);

        $category4 = Category::create([
            'name' => 'else'
        ]);

        $tag1 = Tag::create([
            'name' => 'YA'
        ]);

        $tag2 = Tag::create([
            'name' => 'fantasy'
        ]);

        $tag3 = Tag::create([
            'name' => 'romance'
        ]);

        $tag4 = Tag::create([
            'name' => 'adventure'
        ]);

        $tag5 = Tag::create([
            'name' => 'science fiction'
        ]);

        $author1 = User::create([
            'name' => 'Lisa Litsa',
            'email' => 'lisalitsa@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Amber Krue',
            'email' => 'amberkrue@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author3 = User::create([
            'name' => 'Isla Dawn',
            'email' => 'isladawn@gmail.com',
            'password' => Hash::make('password')
        ]);

        $post1 = $author1->posts()->create([
            'title' => 'I Just Read Six of Crows and I Absolutely Adore It',
            'description' => 'Six of Crows is a fantasy novel written by American author Leigh Bardugo published by Henry Holt and Co. in 2015.',
            'content' => 'Six of Crows is the new book by Leigh Bardugo, author of the Grisha Trilogy. It is still set in the same world as the Grisha trilogy, but on a different continent and with completely new characters.

            Six of Crows is the story of Kaz Brekker and his crew, attempting to pull off an impossible heist. There is Kaz, known as ‘Dirtyhands’ in the Barrel (the slums of Ketterdam), who is part of The Dregs. The Dregs is a gang, and as the name suggests consists of everyone scraped from the floor of the Barrel. Then there is Inej, the wraith, whose ability to move soundlessly makes her unique. Jesper, a sharpshooter with a serious gambling problem and Wylan, the insurance. Finally Nina, a grisha heartrender and Matthias, the outsider with insider knowledge. Together, they are going on a suicide mission, and together they are dangerous enough to have a chance.',
            'category_id' => $category1->id,
            'image' => 'posts/2.jpg'
        ]);

        $post2 = $author3->posts()->create([
            'title' => 'The Sun is Also a Star - Must Read',
            'description' => 'The Sun Is Also a Star, is a touching story about two teenagers who deserve the chance to get to know each other, but risk having it ripped away from them before it’s even really begun.',
            'content' => 'I really really loved this book!!! It was an entirely unique story with a powerful message. Definitely a read I would recommend to e v e r y o n e .

            I love the complexity of the world these kids live in and the way the vignettes about side characters show all the ways little decisions can have big impacts on peoples lives. The main characters are very smart and believable. While it is a love story, it does not have a quintessential happily-ever-after ending, which I think is realistic to the world that is portrayed. The make-out scene may be too much for young teens. The cussing is believable for two teens talking to each other, but again, may not be appropriate for middle schoolers.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'
        ]);

        $post3 = $author2->posts()->create([
            'title' => 'Carry On - Based of Fan Fiction about a Fictional Character',
            'description' => 'Carry On is the story of Simon and Baz who were first mentioned in Fangirl by Rainbow Rowell. In Carry On, Rowell has given them a full story in their own rights rather than being the fan fiction that it was presented as previously.
            ',
            'content' => "Carry On, by Rainbow Rowell, is a book that is meta in it's concept. It's based off of fan-fiction, about a fictional novel series, in another fiction novel, and can be related to the Harry Potter series by a sort of painting by numbers technique, if you like. It's all about the meta, to put it simply. This does mean that you could build an excellent argument about the legitimacy of fan-fiction as a whole on it, but that's not what I'm here to talk about. No, what I want to discuss is the book itself. Carry On is, frankly, a fantastic read.

            One of the main problems of the YA genre as a whole is that it is often the case that GLBTQI+ characters are not often seen as the main protagonists. Actually, fiction as a whole has an issue with diversity, but let's focus on this one right now. Simple to say, this book does not have that problem. As it is based off of Cath from Fangirl's fan-fiction, the book is primarily about the development of a romantic relationship between characters Simon Snow - the worst Chosen One to ever be Chosen - and Baz Grimm-Pitch - clearly a vampire. There is also - as any good magical 'series' should have - a mystery to be solved, and a big evil to fight. And the twist on that big evil is so damn clever that I could not stop squeeing about it. Seriously, I think I annoyed the person I was talking to.",
            'category_id' => $category1->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = $author1->posts()->create([
            'title' => 'Strange the Dreamer',
            'description' => "The dream chooses the dreamer, not the other way around—and Lazlo Strange, war orphan and junior librarian, has always feared that his dream chose poorly. Since he was five years old he’s been obsessed with the mythic lost city of Weep, but it would take someone bolder than he to cross half the world in search of it. Then a stunning opportunity presents itself, in the person of a hero called the Godslayer and a band of legendary warriors, and he has to seize his chance or lose his dream forever.

            What happened in Weep two hundred years ago to cut it off from the rest of the world? What exactly did the Godslayer slay that went by the name of god? And what is the mysterious problem he now seeks help in solving?
            
            The answers await in Weep, but so do more mysteries—including the blue-skinned goddess who appears in Lazlo’s dreams. How did he dream her before he knew she existed? And if all the gods are dead, why does she seem so real?",
            'content' => "In this novel, Laini Taylor aggressively shatters male stereotypes, and as someone who opposes gender discrimination, I love that.

            The male hero is a librarian turned secretary. He’s not physically attractive or muscular. He has a crooked nose, in fact, because it broke after a book fell on it from a library shelf. He’s been cast into a low socioeconomic class, so he’s poor and has no apparent economic prospects. His expertise is fairy tales. His passion is an area of learning that the scholars of his day consider dead. He’s selfless and service-oriented. He can’t help but show concern for others even if they don’t appreciate it or reciprocate. He’s utterly without ego, cooperating instead of competing. His greatest strengths are dreaming and loving. He doesn’t try to dominate any woman or man around him. He isn’t a professional killer, or in a profession that involves killing, or violence, nor is he driven to slay, or even prone to occasional, angry outbursts. He doesn’t drink or roughhouse, or think a great night out involves harassing women at bars. He isn’t trying to become wealthy through some impressive, high-flying career that might not actually accomplish much for the world, the way the novel’s Sisyphean alchemist is. Lazlo, in fact, tries to help another man become wealthy without expecting anything in return, specifically because he knows how much stress the pressure to “succeed” has produced in this acquaintance.",
            'category_id' => $category1->id,
            'image' => 'posts/4.jpg'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id, $tag4->id]);
        $post2->tags()->attach([$tag1->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag2->id, $tag4->id, $tag5->id]);
        $post4->tags()->attach([$tag1->id, $tag2->id, $tag4->id]);
    }
}
