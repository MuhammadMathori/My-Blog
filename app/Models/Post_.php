<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Mathori",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis omnis eligendi facere sed eum. Exercitationem ratione distinctio vitae repellat voluptatum aliquam quae, saepe non sint deserunt vel culpa quibusdam laboriosam doloremque adipisci cupiditate iusto corporis et tenetur hic cum omnis odit suscipit. Possimus porro aliquam consectetur in provident magni non corrupti, veniam quia unde quod nobis, a facilis cum atque asperiores vero beatae rerum eaque. Molestiae fugit molestias repellat maiores eius rem beatae fugiat dolor libero cum quibusdam iure ipsam error ad quaerat non nemo culpa est aperiam, id suscipit, nihil harum autem atque. Voluptatum minus deleniti harum magni autem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Thori",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dicta sequi, accusamus commodi, soluta aut qui, sunt esse voluptas iure porro non odit nam hic assumenda nihil dolore minima possimus ipsam enim nesciunt facilis quod. Illo odit officia, quae nemo tenetur maiores quas, libero minus quasi deserunt alias mollitia temporibus. Recusandae quaerat sapiente eum, culpa error quos obcaecati fuga cupiditate rem sequi quae perspiciatis ea commodi, corrupti aliquam modi libero, quis id consequuntur ipsa perferendis totam! Exercitationem cupiditate atque, aperiam sit temporibus odio debitis, molestiae fugit aspernatur nemo necessitatibus fugiat delectus ad. Illo, corporis nostrum, hic tenetur nesciunt architecto reiciendis temporibus laborum iure assumenda voluptate necessitatibus saepe eligendi autem sequi accusantium! Cum, inventore minima. Ipsum quisquam consequuntur dolorum minus quod repellendus ex nisi esse quo praesentium, iste sequi neque sapiente architecto assumenda expedita est incidunt corrupti aspernatur! Quibusdam animi, nam blanditiis repellendus porro numquam excepturi? Praesentium dolorem illum numquam perferendis aliquid laudantium vero error amet assumenda fuga, dignissimos totam provident accusantium rerum sint, neque aspernatur id quisquam nam sequi? Architecto nobis dicta est deserunt veniam natus perspiciatis odit ratione, at incidunt, et saepe, amet qui quos veritatis autem nisi nam. Pariatur exercitationem numquam minus vero omnis ducimus, quasi recusandae? Reiciendis.
            "
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
