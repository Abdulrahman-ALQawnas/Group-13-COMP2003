<?php


use App\Helpers\Constant;

return [

    'Admin'=>[
        'crud_names' => 'المدراء',
        'crud_name' => 'مدير',
        'crud_the_name' => 'المدير',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'is_active' => 'الحالة',
        'avatar' => 'الصورة',
    ],
    'Provider'=>[
        'crud_names' => 'مزودي الخدمة',
        'crud_name' => 'مزود الخدمة',
        'crud_the_name' => 'المزود',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'mobile' => 'رقم الجوال',
        'avatar' => 'الصورة',
        'type' => 'نوع البروفايل',
        'bio' => 'نبذة',
        'balance' => 'الرصيد',
        'favorite_car' => 'السيارة المفضلة',
        'app_locale' => 'اللغة',
        'is_active' => 'الحالة',
        'created_at' => 'تاريخ الإنشاء',
        'orders_count' => 'عدد الطلبات',
        'Links'=>[
            'active_mobile_email'=>'تفعيل الايميل والجوال'
        ]
    ],
    'Customer'=>[
        'crud_names' => 'المستخدمين',
        'crud_name' => 'مستخدم',
        'crud_the_name' => 'المستخدم',
        'name' => 'الاسم',
        'image' => 'الصورة',
        'email' => 'البريد الالكتروني',
        'mobile' => 'رقم الجوال',
        'avatar' => 'الصورة',
        'type' => 'نوع البروفايل',
        'bio' => 'نبذة',
        'balance' => 'الرصيد',
        'favorite_car' => 'السيارة المفضلة',
        'app_locale' => 'اللغة',
        'is_active' => 'الحالة',
        'created_at' => 'تاريخ الإنشاء',
        'orders_count' => 'عدد الطلبات',
        'Links'=>[
            'active_mobile_email'=>'تفعيل الايميل والجوال'
        ]
    ],
    'Setting'=>[
        'crud_names' => 'الإعدادات',
        'crud_name' => 'اعداد',
        'crud_the_name' => 'الاعداد',
        'key' => 'الإعداد',
        'name' => 'الاسم',
        'name_ar' => 'الاسم عربي',
        'value' => 'القيمة',
        'value_ar' => 'القيمة عربي',
        'pages'=>'الصفحات الثابته',
        'notifications'=>'الاشعارات',
        'other'=>'اعدادات اخرى'
    ],
    'Faq'=>[
        'crud_names' => 'الأسئلة الشائعة',
        'crud_name' => 'سؤال شائع',
        'crud_the_name' => 'السؤال الشائع',
        'faq_category_id' => 'تصنيف الأسئلة الشائعة',
        'question' => 'السؤال',
        'question_ar' => 'السؤال عربي',
        'answer' => 'الإجابة',
        'answer_ar' => 'الإجابة عربي',
        'is_active' => 'الحالة',
    ],
    'FaqCategory'=>[
        'crud_names' => 'تصنيفات الأسئلة الشائعة',
        'crud_name' => 'تصنيف الأسئلة الشائعة',
        'crud_the_name' => 'التصنيف',
        'name' => 'الاسم',
        'name_ar' => 'الاسم عربي',
    ],
    'Ticket'=>[
        'crud_names' => 'التذاكر',
        'crud_name' => 'تذكرة',
        'crud_the_name' => 'التذكرة',
        'id' => '#',
        'user_id' => 'المستخدم',
        'title' => 'العنوان',
        'message' => 'الرسالة',
        'name' => 'Name',
        'email' => 'Email',
        'ticket_response' => 'الرد',
        'response_form' => 'الرد على التذكرة',
        'status' => 'الحالة',
        'Statuses'=>[
            ''.\App\Helpers\Constant::TICKETS_STATUS['Open']=>'مفتوحة',
            ''.\App\Helpers\Constant::TICKETS_STATUS['Closed']=>'مغلقة',
        ]
    ],
    'Permission'=>[
        'crud_names' => 'الصلاحيات',
        'crud_name' => 'صلاحية',
        'crud_the_name' => 'الصلاحية',
        'id' => '#',
        'name' => 'الاسم',
    ],
    'Role'=>[
        'crud_names' => 'الأدوار',
        'crud_name' => 'دور',
        'crud_the_name' => 'الدور',
        'id' => '#',
        'name' => 'الاسم',
        'permissions' => 'الصلاحيات',
    ],
    'Transaction'=>[
        'crud_names' => 'الحركات المالية',
        'crud_name' => 'حركة مالية',
        'crud_the_name' => 'الحركة المالية',
        'user_id' => 'المستخدم',
        'value' => 'القيمة',
        'type' => 'نوع الحركة',
        'Types' => [
            ''.Constant::TRANSACTION_TYPES['Deposit']=>'إيداع',
            ''.Constant::TRANSACTION_TYPES['Withdraw']=>'سحب',
            ''.Constant::TRANSACTION_TYPES['Holding']=>'معلق',
        ],
        'payment_token' => 'كود الدفع',
        'ref_id' => 'العملية المرتبطة',
        'created_at' => 'التاريخ',
        'status' => 'الحالة',
        'Statuses'=>[
            ''.Constant::TRANSACTION_STATUS['Pending']=>'بالإنتظار',
            ''.Constant::TRANSACTION_STATUS['Paid']=>'مدفوع',
        ]
    ],
    'Category'=>[
        'crud_names' => 'التصنيفات',
        'crud_name' => 'تصنيف',
        'crud_the_name' => 'التصنيف',
        'advertisement_id' => 'رقم الاعلان',
        'rate' => 'التقييم',
        'parent_id' => 'التصنيف الرئيسي',
        'name' => 'الاسم',
        'name_ar' => 'الاسم عربي',
        'description' => 'الوصف',
        'description_ar' => 'الوصف عربي',
        'image' => 'الصورة',
        'has_product' => 'يسمح بمنتج',
        'has_service' => 'يسمح بخدمة',
        'is_active' => 'الحالة',
    ],
    'Country'=>[
        'crud_names' => 'الدول',
        'crud_name' => 'دولة',
        'crud_the_name' => 'الدولة',
        'country_code' => 'كود الدولة',
        'name' => 'الاسم',
        'name_ar' => 'الاسم عربي',
        'is_active' => 'الحالة',
    ],
    'City'=>[
        'crud_names' => 'المدن',
        'crud_name' => 'مدينة',
        'crud_the_name' => 'المدينة',
        'country_id' => 'الدولة',
        'name' => 'الاسم',
        'name_ar' => 'الاسم عربي',
        'is_active' => 'الحالة',
    ],
    'Advertisement'=>[
        'crud_names' => 'الإعلانات',
        'crud_name' => 'إعلان',
        'crud_the_name' => 'الإعلان',
        'provider_id' => 'المزود',
        'image' => 'الصورة',
        'title' => 'العنوان',
        'title_ar' => 'العنوان عربي',
        'is_active' => 'الحالة',
    ],
    'Portfolio'=>[
        'crud_names' => 'معرض الأعمال',
        'crud_name' => 'عمل',
        'crud_the_name' => 'العمل',
        'media' => 'صورة العمل',
        'description' => 'وصف العمل',
    ],
    'Order'=>[
        'crud_names' => 'الطلبات',
        'crud_name' => 'طلب',
        'crud_the_name' => 'الطلب',
        'Statuses' => [
            ''.Constant::ORDER_STATUSES['New']=>'جديد',
            ''.Constant::ORDER_STATUSES['Accept']=>'مقبول',
            ''.Constant::ORDER_STATUSES['Rejected']=>'مرفوض',
            ''.Constant::ORDER_STATUSES['Canceled']=>'ملغي',
            ''.Constant::ORDER_STATUSES['Payed']=>'مدفوع',
            ''.Constant::ORDER_STATUSES['InProgress']=>'قيد التنفيذ',
            ''.Constant::ORDER_STATUSES['Delivered']=>'تم التوصيل',
            ''.Constant::ORDER_STATUSES['Received']=>'تم التسليم',
            ''.Constant::ORDER_STATUSES['NotDelivered']=>'لم يتم التوصيل',
            ''.Constant::ORDER_STATUSES['NotReceived']=>'لم يتم التسليم',
            ''.Constant::ORDER_STATUSES['ReceivedByAdmin']=>'مغلق تم التسليم',
            ''.Constant::ORDER_STATUSES['NotReceivedByAdmin']=>'مغلق  لم يتم التسليم',
        ],
        'user_id' => 'المستخدم',
        'freelancer_id' => 'المزود',
        'product_id' => 'المنتج/الخدمة',
        'status' => 'الحالة',
        'statuses_history' => 'تاريخ الحالات',
        'total' => 'المبلغ',
        'quantity' => 'الكمية',
        'price' => 'السعر',
        'created_at' => 'تاريخ الانشاء',
        'delivered_date' => 'تاريخ التوصيل',
        'delivered_time' => 'وقت التوصيل',

    ],
];
