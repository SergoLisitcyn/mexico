<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin/img/user-placeholder.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username;?></p>

                <a><i class="fa fa-circle text-success"></i> В сети</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Навигация', 'options' => ['class' => 'header']],
                    [
                        'label' => 'МФО',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'МФО', 'icon' => 'circle-o', 'url' => ['/mfo/index'],],
                        ],
                    ],
                    [
                        "label" => "Главная страница",
                        "url" => "#",
                        "icon" => "home",
                        "items" => [
                            [
                                "label" => "Управление блоками",
                                "url" => ["/block-management/index"],
                            ],
                            [
                                "label" => "Блок Solicita",
                                "url" => ["/main-solicita/index"],
                            ],
                            [
                                "label" => "Блок О нас пишут",
                                "url" => ["/main-about/index"],
                            ],
                            [
                                "label" => "Блок Nuestros colaboradores",
                                "url" => ["/main-partners/index"],
                            ],
                            [
                                "label" => "Контакты",
                                "url" => ["/main-contact/update?id=1"],
                            ],
                            [
                                "label" => "Наша команда",
                                "url" => ["/main-team/index"],
                            ],
                            [
                                "label" => "Инфо",
                                "url" => ["/main-info/update?id=1"],
                            ],
                        ],
                    ],
                    [
                        "label" => "Управление пользователями",
                        "url" => "#",
                        "icon" => "users",
                        "items" => [
                            [
                                "label" => "Пользователи",
                                "url" => ["/users/index"],
                            ],
                            [
                                "label" => "Создать пользователя",
                                "url" => ["/users/create"],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
