<?php return [
    'plugin' => [
        'name' => '翻译',
        'description' => '启用多语言网站。',
        'tab' => '翻译',
        'manage_locales' => '管理语言环境',
        'manage_messages' => '管理消息',
    ],
    'locale_picker' => [
        'component_name' => '语言环境选择器',
        'component_description' => '显示用于选择前端语言的下拉列表。',
    ],
    'alternate_hreflang' => [
        'component_name' => '备用 hrefLang 元素',
        'component_description' => '将页面的语言替代项作为 hreflang 元素注入'
    ],
    'locale' => [
        'title' => '管理语言',
        'update_title' => '更新语言',
        'create_title' => '创建语言',
        'select_label' => '选择语言',
        'default_suffix' => '默认',
        'unset_default' => '":locale" 已经是默认值,不能取消设置为默认值。',
        'delete_default' => '":locale" 是默认值,不能删除。',
        'disabled_default' => '":locale" 已禁用且不能设置为默认值。',
        'name' => '名称',
        'code' => '代码',
        'is_default' => '默认',
        'is_default_help' => '默认语言代表翻译前的内容。',
        'is_enabled' => '启用',
        'is_enabled_help' => '禁用的语言在前端将不可用。',
        'not_available_help' => '没有设置其他语言。',
        'hint_locales' => '在此处创建用于翻译前端内容的新语言。默认语言代表翻译之前的内容。',
        'reorder_title' => '重新排序语言',
        'sort_order' => '排序顺序',
    ],
    'messages' => [
        'title' => '翻译消息',
        'description' => '更新消息',
        'clear_cache_link' => '清除缓存',
        'clear_cache_loading' => '清除应用程序缓存...',
        'clear_cache_success' => '清除应用缓存成功！',
        'clear_cache_hint' => '您可能需要点击<strong>清除缓存</strong>才能查看前端的更改。',
        'scan_messages_link' => '扫描消息',
        'scan_messages_begin_scan' => '开始扫描',
        'scan_messages_loading' => '正在扫描新消息...',
        'scan_messages_success' => '已成功扫描主题模板文件！',
        'scan_messages_hint' => '点击<strong>扫描消息</strong>将检查活动主题文件中是否有任何要翻译的新消息。',
        'scan_messages_process' => '此进程将尝试扫描活动主题以查找可翻译的消息。',
        'scan_messages_process_limitations' => '有些消息可能无法捕获,只有在第一次使用后才会出现。',
        'scan_messages_purge_label' => '先清除所有消息',
        'scan_messages_purge_help' => '如果选中,这将在执行扫描之前删除所有消息,包括它们的翻译。',
        'scan_messages_purge_confirm' => '您确定要删除所有消息吗？这不能被撤消！',
        'scan_messages_purge_deleted_label' => '扫描后清除丢失的消息',
        'scan_messages_purge_deleted_help' => '如果选中,在扫描完成后,扫描器未找到的任何消息,包括它们的翻译,都将被删除。这不能被撤消！',
        'hint_translate' => '这里可以翻译前端使用的消息,字段会自动保存。',
        'hide_translated' => '隐藏翻译',
        'export_messages_link' => '导出消息',
        'import_messages_link' => '导入消息',
        'not_found' => '未找到',
        'found_help' => '扫描过程中是否发生任何错误。',
        'found_title' => '扫描错误',
    ],
];
