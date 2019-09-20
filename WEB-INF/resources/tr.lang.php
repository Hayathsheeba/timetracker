<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option.
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

// Note to translators: Use proper capitalization rules for your language.

$i18n_language = 'Turkish (Türkçe)';
$i18n_months = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayis', 'Haziran', 'Temmuz', 'Ağustos', 'Eylük', 'Ekim', 'Kasım', 'Aralık');
$i18n_weekdays = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$i18n_weekdays_short = array('Pa', 'Pt', 'Sa', 'Ça', 'Pe', 'Cu', 'Ct');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Giriş',
'menu.logout' => 'Çıkış',
// TODO: translate the following.
// 'menu.forum' => 'Forum',
'menu.help' => 'Yardım',
// TODO: translate the following.
// 'menu.register' => 'Register',
'menu.profile' => 'Profili',
// TODO: translate the following.
// 'menu.group' => 'Group',
// 'menu.plugins' => 'Plugins',
'menu.time' => 'Zaman',
// TODO: translate the following.
// 'menu.week' => 'Week',
// 'menu.expenses' => 'Expenses',
'menu.reports' => 'Raporlar',
// TODO: translate the following.
// 'menu.timesheets' => 'Timesheets',
// 'menu.charts' => 'Charts',
'menu.projects' => 'Projeler',
// TODO: translate the following.
// 'menu.tasks' => 'Tasks',
'menu.users' => 'Kullanıcılar',
// TODO: translate the following.
// 'menu.groups' => 'Groups',
// 'menu.subgroups' => 'Subgroups',
// 'menu.export' => 'Export',
'menu.clients' => 'Müşteriler',
// TODO: translate the following.
// 'menu.options' => 'Options',

// Footer - strings on the bottom of most pages.
// TODO: translate the following.
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: translate the following.
// 'error.access_denied' => 'Access denied.',
// 'error.sys' => 'System error.',
'error.db' => 'Veritabanı hatası.',
// TODO: translate the following.
// 'error.feature_disabled' => 'Feature is disabled.',
'error.field' => 'Hatalı veri "{0}".',
'error.empty' => 'Alan "{0}" boştur.',
// TODO: confirm that error.not_equal is translated correctly.
// Test by changing password with not equal password value fields.
// English equivalent is:
// 'error.not_equal' => 'Field "{0}" is not equal to field "{1}".',
'error.not_equal' => 'Alan "{0}" "{1}" alanıyla aynı değildir.',
// TODO: translate the following.
// 'error.interval' => 'Field "{0}" must be greater than "{1}".',
'error.project' => 'Proje seç.',
// TODO: translate the following.
// 'error.task' => 'Select task.',
'error.client' => 'Müşteri seç',
// TODO: translate the following.
// 'error.report' => 'Select report.',
// 'error.record' => 'Select record.',
'error.auth' => 'Hatalı kullanıcı adı veya parola.',
// TODO: translate the following.
// 'error.user_exists' => 'User with this login already exists.',
// 'error.object_exists' => 'Object with this name already exists.',
// 'error.invoice_exists' => 'Invoice with this number already exists.',
// 'error.role_exists' => 'Role with this rank already exists.',
// 'error.no_invoiceable_items' => 'There are no invoiceable items.',
// 'error.no_records' => 'There are no records.',
// 'error.no_login' => 'No user with this login.',
'error.no_groups' => 'Veritabanınız boş. Yeni bir ekip yaratmak için yönetici olarak giriş yapın.', // TODO: replace "team" with "group".
'error.upload' => 'Dosya yükleme hatası.',
// TODO: translate the following.
// 'error.range_locked' => 'Date range is locked.',
// 'error.mail_send' => 'Error sending mail. Use MAIL_SMTP_DEBUG for diagnostics.',
// 'error.no_email' => 'No email associated with this login.',
// 'error.uncompleted_exists' => 'Uncompleted entry already exists. Close or delete it.',
// 'error.goto_uncompleted' => 'Go to uncompleted entry.',
// 'error.overlap' => 'Time interval overlaps with existing records.',
// 'error.future_date' => 'Date is in future.',
// 'error.xml' => 'Error in XML file at line %d: %s.',
// 'error.cannot_import' => 'Cannot import: %s.',
// 'error.format' => 'Invalid file format.',
// 'error.user_count' => 'Limit on user count.',
// 'error.expired' => 'Expiration date reached.',
// 'error.file_storage' => 'File storage server error.', // See comment in English file.
// 'error.remote_work' => 'Remote work server error.',   // See comment in English file.

// Warning messages.
// TODO: translate the following.
// 'warn.sure' => 'Are you sure?',
// 'warn.confirm_save' => 'Date has changed. Confirm saving, not copying this item.',

// Success messages.
// TODO: translate the following.
// 'msg.success' => 'Operation completed successfully.',

// Labels for buttons.
'button.login' => 'Giriş',
'button.now' => 'Şimdi',
'button.save' => 'Kaydet',
// TODO: translate the following.
// 'button.copy' => 'Copy',
'button.cancel' => 'Iptal',
'button.submit' => 'Gönder',
'button.add' => 'Ekle',
'button.delete' => 'Sil',
'button.generate' => 'Yarat',
// TODO: translate the following.
// 'button.reset_password' => 'Reset password',
'button.send' => 'Gönder',
'button.send_by_email' => 'E-posta ile gönder',
'button.create_group' => 'Ekip yarat', // TODO: replace "team" with "group".
// TODO: translate the following.
// 'button.export' => 'Export group',
'button.import' => 'Ekibi içeri aktar', // TODO: replace "team" with "group".
// TODO: translate the following.
// 'button.close' => 'Close',
// 'button.stop' => 'Stop',
// 'button.approve' => 'Approve',
// 'button.disapprove' => 'Disapprove',

// Labels for controls on forms. Labels in this section are used on multiple forms.
// TODO: translate the following.
// 'label.group_name' => 'Group name',
// 'label.address' => 'Address',
'label.currency' => 'Para birimi',
// TODO: translate the following.
// 'label.manager_name' => 'Manager name',
// 'label.manager_login' => 'Manager login',
'label.person_name' => 'Isim',
'label.thing_name' => 'Isim',
// TODO: translate the following.
// 'label.login' => 'Login',
'label.password' => 'Parola',
// TODO: translate the following.
// 'label.confirm_password' => 'Confirm password',
'label.email' => 'E-posta',
// TODO: translate the following.
// 'label.cc' => 'Cc',
// 'label.bcc' => 'Bcc',
'label.subject' => 'Konu',
'label.date' => 'Tarih',
'label.start_date' => 'Başlangıç tarihi',
'label.end_date' => 'Son tarihi',
'label.user' => 'Kullanıcı',
'label.users' => 'Kullanıcılar',
// TODO: translate the following.
// 'label.group' => 'Group',
// 'label.subgroups' => 'Subgroups',
// 'label.roles' => 'Roles',
'label.client' => 'Müşteri',
'label.clients' => 'Müşteriler',
// TODO: translate the following.
// 'label.option' => 'Option',
'label.invoice' => 'Fatura',
'label.project' => 'Proje',
'label.projects' => 'Projeler',
// TODO: translate the following.
// 'label.task' => 'Task',
// 'label.tasks' => 'Tasks',
// 'label.description' => 'Description',
'label.start' => 'Başlat',
'label.finish' => 'Tamamla',
'label.duration' => 'Süre',
'label.note' => 'Not',
'label.notes' => 'Notlar',
// TODO: translate the following.
// 'label.item' => 'Item',
// 'label.cost' => 'Cost',
// 'label.ip' => 'IP',
// 'label.day_total' => 'Day total',
'label.week_total' => 'Haftalık toplam',
// TODO: translate the following.
// 'label.month_total' => 'Month total',
'label.today' => 'Bugün',
// TODO: translate the following.
// 'label.view' => 'View',
'label.edit' => 'Düzenle',
'label.delete' => 'Sil',
// TODO: translate the following.
// 'label.configure' => 'Configure',
'label.select_all' => 'Tümünü seç',
'label.select_none' => 'Hiçbirini seçme',
// TODO: translate the following.
// 'label.day_view' => 'Day view',
// 'label.week_view' => 'Week view',
'label.id' => 'ID',
// TODO: translate the following.
// 'label.language' => 'Language',
// 'label.decimal_mark' => 'Decimal mark',
// 'label.date_format' => 'Date format',
// 'label.time_format' => 'Time format',
// 'label.week_start' => 'First day of week',
'label.comment' => 'Yorum',
'label.status' => 'Durum',
'label.tax' => 'Vergi',
'label.subtotal' => 'Alt toplamı',
'label.total' => 'Toplam',
// TODO: translate the following.
// 'label.client_name' => 'Client name',
// 'label.client_address' => 'Client address',
'label.or' => 'ya da',
// TODO: translate the following.
// 'label.error' => 'Error',
// 'label.ldap_hint' => 'Type your <b>Windows login</b> and <b>password</b> in the fields below.',
'label.required_fields' => '* zorunlu bilgi',
'label.on_behalf' => 'adına',
'label.role_manager' => '(yönetici)',
'label.role_comanager' => '(yardımcı yönetici)',
'label.role_admin' => '(sistem yönetici)',
// TODO: translate the following.
// 'label.page' => 'Page',
// 'label.condition' => 'Condition',
// 'label.yes' => 'yes',
// 'label.no' => 'no',
// 'label.sort' => 'Sort',
// Labels for plugins (extensions to Time Tracker that provide additional features).
// TODO: translate the following.
// 'label.custom_fields' => 'Custom fields',
// 'label.monthly_quotas' => 'Monthly quotas',
// 'label.entity' => 'Entity',
// 'label.type' => 'Type',
// 'label.type_dropdown' => 'dropdown',
// 'label.type_text' => 'text',
// 'label.required' => 'Required',
'label.fav_report' => 'Sık kullanılan rapor',
// TODO: translate the following.
// 'label.schedule' => 'Schedule',
// 'label.what_is_it' => 'What is it?',
// 'label.expense' => 'Expense',
// 'label.quantity' => 'Quantity',
// 'label.paid_status' => 'Paid status',
// 'label.paid' => 'Paid',
// 'label.mark_paid' => 'Mark paid',
// 'label.week_menu' => 'Week menu',
// 'label.week_note' => 'Week note',
// 'label.week_list' => 'Week list',
// 'label.work_units' => 'Work units',
// 'label.work_units_short' => 'Units',
'label.totals_only' => 'Sadece toplamlar',
// TODO: translate the following.
// 'label.quota' => 'Quota',
// 'label.timesheet' => 'Timesheet',
// 'label.submitted' => 'Submitted',
// 'label.approved' => 'Approved',
// 'label.approval' => 'Report approval',
// 'label.mark_approved' => 'Mark approved',
// 'label.template' => 'Template',
// 'label.attachments' => 'Attachments',
// 'label.files' => 'Files',
// 'label.file' => 'File',
// 'label.image' => 'Image',
// 'label.download' => 'Download',
// 'label.active_users' => 'Active Users',
// 'label.inactive_users' => 'Inactive Users',
// 'label.details' => 'Details',
// 'label.budget' => 'Budget',
// 'label.work' => 'Work',   // Table column header for work items, see https://www.anuko.com/time_tracker/what_is/work_plugin.htm
// 'label.offer' => 'Offer', // Table column header for offers, see https://www.anuko.com/time_tracker/what_is/work_plugin.htm
// 'label.contractor' => 'Contractor', // Table column header for offers (contractor is someone who offers to do work).
                                       // Technically, it is either an org name or a combination of org and group names
                                       // because both work items and offers are owned by Time Tracker groups of users.

// Entity names. We use lower case (in English) because they are used in dropdowns, too.
// They are used to associate a custom field with an entity type.
// TODO: translate the following.
// 'entity.time' => 'time',
// 'entity.user' => 'user',
// 'entity.project' => 'project',

// Form titles.
// Form titles.
// TODO: Improve titles for consistency, so that each title explains correctly what each
// page is about and is "consistent" from page to page, meaning that correct grammar is used everywhere.
// Compare with English file to see how it is done there and do Romanian titles similarly.
// Specifically: compare project and client titles and see how they differ.
// TODO: Translate the following.
// 'title.error' => 'Error',
// 'title.success' => 'Success',
'title.login' => 'Giriş',
'title.groups' => 'Ekipler', // TODO: change "teams" to "groups".
// TODO: translate the following.
// 'title.subgroups' => 'Subgroups',
// 'title.add_group' => 'Adding Group',
// 'title.edit_group' => 'Editing Group',
'title.delete_group' => 'Ekibi sil', // TODO: change "team" to "group".
'title.reset_password' => 'Parolayı sıfırla',
// TODO: translate the following.
// 'title.change_password' => 'Changing Password',
'title.time' => 'Zaman',
'title.edit_time_record' => 'Zaman kaydını düzenliyor',
'title.delete_time_record' => 'Zaman kaydını siliyor',
// TODO: Translate the following.
// 'title.time_files' => 'Time Record Files',
// 'title.expenses' => 'Expenses',
// 'title.edit_expense' => 'Editing Expense Item',
// 'title.delete_expense' => 'Deleting Expense Item',
// 'title.predefined_expenses' => 'Predefined Expenses',
// 'title.add_predefined_expense' => 'Adding Predefined Expense',
// 'title.edit_predefined_expense' => 'Editing Predefined Expense',
// 'title.delete_predefined_expense' => 'Deleting Predefined Expense',
'title.reports' => 'Raporlar',
'title.report' => 'Rapor',
// TODO: translate the following.
// 'title.send_report' => 'Sending Report',
// 'title.timesheets' => 'Timesheets',
// 'title.timesheet' => 'Timesheet',
// 'title.timesheet_files' => 'Timesheet Files',
'title.invoice' => 'Fatura',
// TODO: translate the following.
// 'title.send_invoice' => 'Sending Invoice',
// 'title.charts' => 'Charts',
'title.projects' => 'Projeler',
// TODO: translate the following.
// 'title.project_files' => 'Project Files',
'title.add_project' => 'Proje ekleniyor',
'title.edit_project' => 'Proje düzenleniyor',
'title.delete_project' => 'Proje siliniyor',
// TODO: translate the following.
// 'title.tasks' => 'Tasks',
// 'title.add_task' => 'Adding Task',
// 'title.edit_task' => 'Editing Task',
// 'title.delete_task' => 'Deleting Task',
'title.users' => 'Kullanıcılar',
'title.add_user' => 'Kullanıcı yarat', // TODO: we need consistency with all titles. Why not ekleniyor?
'title.edit_user' => 'Kullanıcı düzenleniyor',
'title.delete_user' => 'Kullanıcı siliniyor',
// TODO: translate the following.
// 'title.roles' => 'Roles',
// 'title.add_role' => 'Adding Role',
// 'title.edit_role' => 'Editing Role',
// 'title.delete_role' => 'Deleting Role',
'title.clients' => 'Müşteriler',
'title.add_client' => 'Müşteri ekle',
'title.edit_client' => 'Müşteriyi düzenle',
'title.delete_client' => 'Müşteriyi sil',
'title.invoices' => 'Faturalar',
// TODO: translate the following.
// 'title.add_invoice' => 'Adding Invoice',
// 'title.view_invoice' => 'Viewing Invoice',
// 'title.delete_invoice' => 'Deleting Invoice',
// 'title.notifications' => 'Notifications',
// 'title.add_notification' => 'Adding Notification',
// 'title.edit_notification' => 'Editing Notification',
// 'title.delete_notification' => 'Deleting Notification',
// 'title.add_timesheet' => 'Adding Timesheet',
// 'title.edit_timesheet' => 'Editing Timesheet',
// 'title.delete_timesheet' => 'Deleting Timesheet',
// 'title.monthly_quotas' => 'Monthly Quotas',
// 'title.export' => 'Exporting Group Data',
// 'title.import' => 'Importing Group Data',
// 'title.options' => 'Options',
// 'title.display_options' => 'Display Options',
'title.profile' => 'Profili',
// TODO: translate the following.
// 'title.plugins' => 'Plugins',
// 'title.cf_custom_fields' => 'Custom Fields',
// 'title.cf_add_custom_field' => 'Adding Custom Field',
// 'title.cf_edit_custom_field' => 'Editing Custom Field',
// 'title.cf_delete_custom_field' => 'Deleting Custom Field',
// 'title.cf_dropdown_options' => 'Dropdown Options',
// 'title.cf_add_dropdown_option' => 'Adding Option',
// 'title.cf_edit_dropdown_option' => 'Editing Option',
// 'title.cf_delete_dropdown_option' => 'Deleting Option',
// NOTE TO TRANSLATORS: Locking is a feature to lock records from modifications (ex: weekly on Mondays we lock all previous weeks).
// It is also a name for the Locking plugin on the group settings page.
// 'title.locking' => 'Locking',
// 'title.week_view' => 'Week View',
// 'title.swap_roles' => 'Swapping Roles',
// 'title.work_units' => 'Work Units',
// 'title.templates' => 'Templates',
// 'title.add_template' => 'Adding Template',
// 'title.edit_template' => 'Editing Template',
// 'title.delete_template' => 'Deleting Template',
// 'title.edit_file' => 'Editing File',
// 'title.delete_file' => 'Deleting File',
// 'title.download_file' => 'Downloading File',
// 'title.work' => 'Work',
// 'title.add_work' => 'Adding Work',
// 'title.edit_work' => 'Editing Work',
// 'title.delete_work' => 'Deleting Work',
// 'title.active_work' => 'Active Work', // Active work items this group outsources to other groups.
// 'title.available_work' => 'Available Work', // Available work items from other organizations.
// 'title.inactive_work' => 'Inactive Work', // Inactive work items this group was outsourcing to other groups.
// 'title.add_offer' => 'Adding Offer',
// 'title.edit_offer' => 'Editing Offer',
// 'title.delete_offer' => 'Deleting Offer',
// 'title.active_offers' => 'Active Offers', // Active offers this group makes available to other groups.
// 'title.available_offers' => 'Available Offers', // Available offers from other organizations.
// 'title.inactive_offers' => 'Inactive Offers', // Inactive offers for group.

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- tümü ---',
'dropdown.no' => '--- hiç ---',
'dropdown.current_day' => 'bugün',
'dropdown.previous_day' => 'dün',
'dropdown.selected_day' => 'gün',
'dropdown.current_week' => 'bu hafta',
'dropdown.previous_week' => 'geçen hafta',
'dropdown.selected_week' => 'hafta',
'dropdown.current_month' => 'bu ay',
'dropdown.previous_month' => 'geçen ay',
'dropdown.selected_month' => 'ay',
// TODO: translate the following.
// 'dropdown.current_year' => 'this year',
// 'dropdown.previous_year' => 'previous year',
// 'dropdown.selected_year' => 'year',
'dropdown.all_time' => 'tüm zamanlar',
'dropdown.projects' => 'projeler',
// TODO: translate the following.
// 'dropdown.tasks' => 'tasks',
'dropdown.clients' => 'müşteriler',
// TODO: translate the following.
// 'dropdown.select' => '--- select ---',
// 'dropdown.select_invoice' => '--- select invoice ---',
// 'dropdown.select_timesheet' => '--- select timesheet ---',
'dropdown.status_active' => 'aktif',
// TODO: translate the following.
// 'dropdown.status_inactive' => 'inactive',
// 'dropdown.delete' => 'delete',
// 'dropdown.do_not_delete' => 'do not delete',
// 'dropdown.approved' => 'approved',
// 'dropdown.not_approved' => 'not approved',
// 'dropdown.paid' => 'paid',
// 'dropdown.not_paid' => 'not paid',
// 'dropdown.ascending' => 'ascending',
// 'dropdown.descending' => 'descending',

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Parolanızı unuttunuz mu?',
// TODO: translate the following.
// 'form.login.about' => 'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> is a simple, easy to use, open source time tracking system.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Parola sıfırlama talebi yollandı.', // TODO: add "by email" to match the English string.
'form.reset_password.email_subject' => 'Anuko Time Tracker parola sıfırlama talebi',
// TODO: translate the ending of the following.
// TODO: English string has changed. "from IP" added. Re-translate the beginning.
// 'form.reset_password.email_body' => "Dear User,\n\nSomeone from IP %s requested your Anuko Time Tracker password reset. Please visit this link if you want to reset your password.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",
// "IP %s" probably sounds awkward.
'form.reset_password.email_body' => "Sayın Kullanıcı,\n\nBirisi, IP %s, Anuko Time Tracker parolanızın sıfırlanmasını istedi. Parolanızı sıfırlamak isterseniz lütfen bu bağlantıyı takip edin.\n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
// TODO: translate the following.
// 'form.change_password.tip' => 'Type new password and click on Save.',

// Time form. See example at https://timetracker.anuko.com/time.php.
// TODO: translate the following.
'form.time.duration_format' => '(ss:dd ya da 0.0h)',
'form.time.billable' => 'Faturalandırılabilir',
// TODO: translate the following.
// 'form.time.uncompleted' => 'Uncompleted',
// 'form.time.remaining_quota' => 'Remaining quota',
// 'form.time.over_quota' => 'Over quota',
// 'form.time.remaining_balance' => 'Remaining balance',
// 'form.time.over_balance' => 'Over balance',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Bu kayıt sadece başlangıç zamanıyla silindi. Bu hata değildir.',

// Week view form. See example at https://timetracker.anuko.com/week.php.
// TODO: translate the following.
// 'form.week.new_entry' => 'New entry',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Sık kullanılan olarak kaydet',
// TODO: translate the following.
// 'form.reports.confirm_delete' => 'Are you sure you want to delete this favorite report?',
'form.reports.include_billable' => 'faturalandırılabilir',
'form.reports.include_not_billable' => 'faturalandırılamaz',
// TODO: translate the following.
// 'form.reports.include_invoiced' => 'invoiced',
// 'form.reports.include_not_invoiced' => 'not invoiced',
// 'form.reports.include_assigned' => 'assigned',
// 'form.reports.include_not_assigned' => 'not assigned',
// 'form.reports.include_pending' => 'pending',
'form.reports.select_period' => 'Zaman aralığını seç',
'form.reports.set_period' => 'ya da tarihleri belirle',
'form.reports.show_fields' => 'Alanları göster',
// TODO: translate the following.
// 'form.reports.time_fields' => 'Time fields',
// 'form.reports.user_fields' => 'User fields',
'form.reports.group_by' => 'Gruplandırma kıstas',
'form.reports.group_by_no' => '--- gruplama yok ---',
'form.reports.group_by_date' => 'tarih',
'form.reports.group_by_user' => 'kullanıcı',
// TODO: translate the following.
// 'form.reports.group_by_client' => 'client',
'form.reports.group_by_project' => 'proje',
// TODO: translate the following.
// 'form.reports.group_by_task' => 'task',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
// TODO: translate the following.
// 'form.report.export' => 'Export',
// 'form.report.assign_to_invoice' => 'Assign to invoice',
// 'form.report.assign_to_timesheet' => 'Assign to timesheet',

// Timesheets form. See example at https://timetracker.anuko.com/timesheets.php
// TODO: translate the following.
// 'form.timesheets.active_timesheets' => 'Active Timesheets',
// 'form.timesheets.inactive_timesheets' => 'Inactive Timesheets',

// Templates form. See example at https://timetracker.anuko.com/templates.php
// TODO: translate the following.
// 'form.templates.active_templates' => 'Active Templates',
// 'form.templates.inactive_templates' => 'Inactive Templates',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'Fatura numarası',
'form.invoice.person' => 'Kişi',

// Deleting Invoice form. See example at https://timetracker.anuko.com/invoice_delete.php
// 'form.invoice.invoice_to_delete' => 'Invoice to delete',
// 'form.invoice.invoice_entries' => 'Invoice entries',
// 'form.invoice.confirm_deleting_entries' => 'Please confirm deleting invoice entries from Time Tracker.',

// Charts form. See example at https://timetracker.anuko.com/charts.php
// TODO: translate the following.
// 'form.charts.interval' => 'Interval',
// 'form.charts.chart' => 'Chart',

// Projects form. See example at https://timetracker.anuko.com/projects.php
// TODO: translate the following.
// 'form.projects.active_projects' => 'Active Projects',
// 'form.projects.inactive_projects' => 'Inactive Projects',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
// TODO: translate the following.
// 'form.tasks.active_tasks' => 'Active Tasks',
// 'form.tasks.inactive_tasks' => 'Inactive Tasks',

// Users form. See example at https://timetracker.anuko.com/users.php
// TODO: translate the following.
// 'form.users.uncompleted_entry' => 'User has an uncompleted time entry',
'form.users.role' => 'Rol',
// TODO: translate the following.
'form.users.manager' => 'Yönetici',
'form.users.comanager' => 'Yardımcı yönetici',
'form.users.rate' => 'Tarife', // TODO: is this correct?
'form.users.default_rate' => 'Varsayılan saat ücreti',

// Editing User form. See example at https://timetracker.anuko.com/user_edit.php
// TODO: translate the following.
// 'form.user_edit.swap_roles' => 'Swap roles',

// Roles form. See example at https://timetracker.anuko.com/roles.php
// TODO: translate the following.
// 'form.roles.active_roles' => 'Active Roles',
// 'form.roles.inactive_roles' => 'Inactive Roles',
// 'form.roles.rank' => 'Rank',
// 'form.roles.rights' => 'Rights',
// 'form.roles.assigned' => 'Assigned',
// 'form.roles.not_assigned' => 'Not assigned',

// Clients form. See example at https://timetracker.anuko.com/clients.php
// TODO: translate the following.
// 'form.clients.active_clients' => 'Active Clients',
// 'form.clients.inactive_clients' => 'Inactive Clients',

// Deleting Client form. See example at https://timetracker.anuko.com/client_delete.php
// TODO: translate the following.
// 'form.client.client_to_delete' => 'Client to delete',
// 'form.client.client_entries' => 'Client entries',

// Exporting Group Data form. See example at https://timetracker.anuko.com/export.php
// TODO: replace "team" with "group" in the string below.
'form.export.hint' => 'Tüm ekip bilgilerinizi bir xml dosyasına aktarabilirsiniz. Bu, kendi sunucunuza bilgi aktarmak istediğinizde faydalı olabilir.',
'form.export.compression' => 'Sıkıştırma',
// TODO: translate the following.
// 'form.export.compression_none' => 'none',
// 'form.export.compression_bzip' => 'bzip',

// Importing Group Data form. See example at https://timetracker.anuko.com/import.php (login as admin first).
'form.import.hint' => 'Ekip bilgileri bir xml dosyasından içe aktar.', // TODO: replace "team" with "group".
'form.import.file' => 'Dosya seç',
'form.import.success' => 'Içe aktarma başarıyla tamamlandı.',

// Groups form. See example at https://timetracker.anuko.com/admin_groups.php (login as admin first).
// TODO: check form.groups.hint for accuracy. I did not not how to translate "login", so this may be garbage now.
// ALSO TODO: replace "team" with "group" in the string below.
'form.groups.hint' => 'Yeni bir ekip yönetimi hesabı yaratarak yeni bir ekibi yaratın.<br>Ayrıca başka bir Anuko Time Tracker sunucusundan ekip bilgilerini bir xml dosyasından aktarabilirsiniz (login çakışmalarına izin verilmemekte).',

// Group Settings form. See example at https://timetracker.anuko.com/group_edit.php.
// TODO: translate the following.
// 'form.group_edit.12_hours' => '12 hours',
// 'form.group_edit.24_hours' => '24 hours',
// 'form.group_edit.display_options' => 'Display options',
// 'form.group_edit.holidays' => 'Holidays',
// 'form.group_edit.tracking_mode' => 'Tracking mode',
// 'form.group_edit.mode_time' => 'time',
// 'form.group_edit.mode_projects' => 'projects',
// 'form.group_edit.mode_projects_and_tasks' => 'projects and tasks',
// 'form.group_edit.record_type' => 'Record type',
// 'form.group_edit.type_all' => 'all',
// 'form.group_edit.type_start_finish' => 'start and finish',
// 'form.group_edit.type_duration' => 'duration',
// 'form.group_edit.punch_mode' => 'Punch mode',
// 'form.group_edit.allow_overlap' => 'Allow overlap',
// 'form.group_edit.future_entries' => 'Future entries',
// 'form.group_edit.uncompleted_indicators' => 'Uncompleted indicators',
// 'form.group_edit.confirm_save' => 'Confirm saving',
// 'form.group_edit.allow_ip' => 'Allow IP',
// 'form.group_edit.advanced_settings' => 'Advanced settings',

// Deleting Group form. See example at https://timetracker.anuko.com/delete_group.php
// TODO: translate the following.
// 'form.group_delete.hint' => 'Are you sure you want to delete the entire group?',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'Kimden',
'form.mail.to' => 'Kime',
// TODO: translate the following.
// 'form.mail.report_subject' => 'Time Tracker Report',
// 'form.mail.footer' => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
// 'form.mail.report_sent' => 'Report sent.',
'form.mail.invoice_sent' => 'Fatura yollandı.',

// Quotas configuration form. See example at https://timetracker.anuko.com/quotas.php after enabling Monthly quotas plugin.
// TODO: translate the following.
// 'form.quota.year' => 'Year',
// 'form.quota.month' => 'Month',
// 'form.quota.workday_hours' => 'Hours in work day',
// 'form.quota.hint' => 'If values are empty, quotas are calculated automatically based on workday hours and holidays.',

// Swap roles form. See example at https://timetracker.anuko.com/swap_roles.php.
// TODO: translate the following.
// 'form.swap.hint' => 'Demote yourself to a lower role by swapping roles with someone else. This cannot be undone.',
// 'form.swap.swap_with' => 'Swap roles with',

// Work Units configuration form. See example at https://timetracker.anuko.com/work_units.php after enabling Work units plugin.
// TODO: translate the following.
// 'form.work_units.minutes_in_unit' => 'Minutes in unit',
// 'form.work_units.1st_unit_threshold' => '1st unit threshold',

// Roles and rights. These strings are used in multiple places. Grouped here to provide consistent translations.
// TODO: translate the following.
// 'role.user.label' => 'User',
// 'role.user.low_case_label' => 'user',
// 'role.user.description' => 'A regular member without management rights.',
// 'role.client.label' => 'Client',
// 'role.client.low_case_label' => 'client',
// 'role.client.description' => 'A client can view its own data.',
// 'role.supervisor.label' => 'Supervisor',
// 'role.supervisor.low_case_label' => 'supervisor',
// 'role.supervisor.description' => 'A person with a small set of management rights.',
// 'role.comanager.label' => 'Co-manager',
// 'role.comanager.low_case_label' => 'co-manager',
// 'role.comanager.description' => 'A person with a big set of management functions.',
// 'role.manager.label' => 'Manager',
// 'role.manager.low_case_label' => 'manager',
// 'role.manager.description' => 'Group manager. Can do most of things for a group.',
// 'role.top_manager.label' => 'Top manager',
// 'role.top_manager.low_case_label' => 'top manager',
// 'role.top_manager.description' => 'Top group manager. Can do everything in a tree of groups.',
// 'role.admin.label' => 'Administrator',
// 'role.admin.low_case_label' => 'administrator',
// 'role.admin.description' => 'Site adminsitrator.',

// Timesheet View form. See example at https://timetracker.anuko.com/timesheet_view.php.
// TODO: translate the following.
// 'form.timesheet_view.submit_subject' => 'Timesheet approval request',
// 'form.timesheet_view.submit_body' => "A new timesheet requires approval.<p>User: %s.",
// 'form.timesheet_view.approve_subject' => 'Timesheet approved',
// 'form.timesheet_view.approve_body' => "Your timesheet %s was approved.<p>%s",
// 'form.timesheet_view.disapprove_subject' => 'Timesheet not approved',
// 'form.timesheet_view.disapprove_body' => "Your timesheet %s was not approved.<p>%s",

// Display Options form. See example at https://timetracker.anuko.com/display_options.php.
// TODO: translate the following.
// 'form.display_options.menu' => 'Menu',
// 'form.display_options.note_on_separate_row' => 'Note on separate row',

// Work form. See example at https://timetracker.anuko.com/work.php
// TODO: translate the following.
// 'form.work.work_items' => 'Work Items',
// 'form.work.offers' => 'Offers',
);
