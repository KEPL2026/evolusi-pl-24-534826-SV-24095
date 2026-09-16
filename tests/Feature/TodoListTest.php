<?php

namespace Tests\Feature;

use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * The /todos page should load successfully and show the list title.
     */
    public function test_todo_list_page_loads_successfully(): void
    {
        $response = $this->get('/todos');

        $response->assertStatus(200);
        $response->assertSee('Todo List');
    }
}
