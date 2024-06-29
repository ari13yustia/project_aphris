<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
use Tpetry\PostgresqlEnhanced\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::createFunction('_generate_menus', ['var_user_id' => 'int8'] , [
            'id'            => 'int8',
            'title'         => 'varchar',
            'url'           => 'varchar',
            'icon'          => 'varchar',
            'description'   => 'varchar',
            'sub_menu'      => 'text',
            'is_checked'      => 'int4'
        ], 'plpgsql', '
          BEGIN
            RETURN QUERY
            SELECT
                tbl."id",
                tbl.title,
                tbl.url,
                tbl.icon,
                tbl.description,
                sub."sub_menu" :: TEXT,
                usr_priv."status"::INTEGER as "is_checked"
            FROM
                "public".app_menus tbl
                LEFT JOIN (
                SELECT
                    menus."app_menu_id",
                    json_agg (
                        json_build_object (
                            \'id\',
                            menus."id",
                            \'title\',
                            menus."title",
                            \'url\',
                            menus."url",
                            \'icon\',
                            menus."icon",
                            \'description\',
                            menus."description",
                            \'order\',
                            menus."order",
                            \'is_checked\',
                            COALESCE(usr_priv."status",0)
                        )
                    ORDER BY
                        ( menus."order" )
                    ) AS "sub_menu"
                FROM
                    "public".app_menus menus
                    INNER JOIN "public"."users_privileges" usr_priv ON menus.id = usr_priv.app_menu_id AND usr_priv."user_id" = "var_user_id"
                WHERE
                    menus.app_menu_id IS NOT NULL
                GROUP BY
                    menus."app_menu_id"
                ) sub ON tbl."id" = sub."app_menu_id"
                INNER JOIN "public"."users_privileges" usr_priv ON tbl.id = usr_priv.app_menu_id AND usr_priv."user_id" = "var_user_id"
            WHERE
                tbl.app_menu_id IS NULL
                AND usr_priv.app_menu_id IS NOT NULL
            ORDER BY
                tbl."order";
          END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropFunctionIfExists('_generate_menus');
    }
};
