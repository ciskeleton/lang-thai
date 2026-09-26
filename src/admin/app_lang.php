<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'ส่วนประกอบ';
$lang['admin_content'] = 'เนื้อหา';
$lang['admin_database_backup'] = 'การสำรองฐานข้อมูล';
$lang['admin_extensions'] = 'ส่วนขยาย';
$lang['admin_firewall'] = 'ไฟร์วอลล์';
$lang['admin_help'] = 'ศูนย์ช่วยเหลือ';
$lang['admin_languages'] = 'ภาษา';
$lang['admin_logs'] = 'บันทึกระบบ';
$lang['admin_media'] = 'คลังสื่อ';
$lang['admin_modules'] = 'โมดูล';
$lang['admin_plugins'] = 'ปลั๊กอิน';
$lang['admin_reports'] = 'บันทึกกิจกรรม';
$lang['admin_settings'] = 'การตั้งค่าระบบ';
$lang['admin_sysinfo'] = 'ข้อมูลระบบ';
$lang['admin_system'] = 'ระบบ';
$lang['admin_system_firewall'] = 'ไฟร์วอลล์ระบบ';
$lang['admin_themes'] = 'ธีม';
$lang['admin_updates'] = 'การอัปเดตระบบ';
$lang['admin_users'] = 'ผู้ใช้';
$lang['admin_view_site'] = 'ดูเว็บไซต์';
$lang['per_page'] = 'จำนวนต่อหน้า';

// Generic Messages
$lang['admin_footer_thankyou'] = 'ขอขอบคุณที่สร้างด้วย <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{ไม่มีรายการที่เปิดใช้งาน} other{มี <b>#</b> จาก <b>%s</b> รายการที่เปิดใช้งาน}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'การติดตั้งล้มเหลว: %s';
$lang['admin_install_location_app'] = 'เฉพาะแอปพลิเคชันนี้';
$lang['admin_install_location_core'] = 'แอปพลิเคชันทั้งหมด';
$lang['admin_install_location_select'] = '&#151; เลือกตำแหน่ง &#151;';
$lang['admin_install_update_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการอัปเดตแพ็กเกจนี้?';
$lang['admin_install_update_error'] = 'อัปเดตแพ็กเกจไม่สำเร็จ';
$lang['admin_install_update_skip_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการข้ามการอัปเดตนี้?';
$lang['admin_install_update_skip_error'] = 'ข้ามการอัปเดตนี้ไม่สำเร็จ';
$lang['admin_install_update_skip_success'] = 'ข้ามการอัปเดตสำเร็จแล้ว';
$lang['admin_install_update_success'] = 'อัปเดตแพ็กเกจสำเร็จแล้ว';
$lang['admin_install_upload_tip'] = 'ติดตั้งแพ็กเกจโดยอัปโหลดไฟล์ <b>.zip</b> ของแพ็กเกจที่นี่';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'ไม่สามารถล้างไฟล์สำรองเก่าได้';
$lang['admin_database_backup_clean_success'] = 'ลบไฟล์สำรองแล้ว %d ไฟล์ เพิ่มพื้นที่ว่าง %d บนดิสก์';
$lang['admin_database_backup_create'] = 'สร้างไฟล์สำรอง';
$lang['admin_database_backup_create_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการสร้างไฟล์สำรองตอนนี้?';
$lang['admin_database_backup_create_error'] = 'ไม่สามารถสร้างไฟล์สำรองได้ โปรดตรวจสอบว่าโฟลเดอร์ <b>%s</b> สามารถเขียนได้';
$lang['admin_database_backup_create_success'] = 'สร้างไฟล์สำรองฐานข้อมูล <b>%s</b> สำเร็จแล้ว';
$lang['admin_database_backup_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบไฟล์สำรองเหล่านี้?';
$lang['admin_database_backup_delete_error'] = 'ไม่สามารถลบไฟล์สำรองที่เลือกได้';
$lang['admin_database_backup_delete_success'] = 'ลบไฟล์สำรองสำเร็จแล้ว';
$lang['admin_database_backup_download_error'] = 'ไม่สามารถดาวน์โหลดไฟล์สำรองที่เลือกได้';
$lang['admin_database_backup_download_success'] = 'ดาวน์โหลดไฟล์สำรองสำเร็จแล้ว';
$lang['admin_database_backup_lock_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการล็อกไฟล์สำรองเหล่านี้?';
$lang['admin_database_backup_lock_error'] = 'ไม่สามารถล็อกไฟล์สำรองที่เลือกได้';
$lang['admin_database_backup_lock_success'] = 'ล็อกไฟล์สำรองสำเร็จแล้ว';
$lang['admin_database_backup_locked_error'] = 'ไม่สามารถลบไฟล์สำรองที่ถูกล็อกได้';
$lang['admin_database_backup_missing_error'] = 'ไม่พบไฟล์สำรอง';
$lang['admin_database_backup_unlock_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปลดล็อกไฟล์สำรองเหล่านี้?';
$lang['admin_database_backup_unlock_error'] = 'ไม่สามารถปลดล็อกไฟล์สำรองที่เลือกได้';
$lang['admin_database_backup_unlock_success'] = 'ปลดล็อกไฟล์สำรองสำเร็จแล้ว';
$lang['admin_database_prune'] = 'ตัดแต่งฐานข้อมูล';
$lang['admin_database_prune_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการตัดแต่งฐานข้อมูล? จะมีการสร้างไฟล์สำรองก่อนดำเนินการ';
$lang['admin_database_prune_error'] = 'ไม่สามารถตัดแต่งฐานข้อมูลได้';
$lang['admin_database_prune_next'] = 'การตัดแต่งครั้งถัดไป: <b>%s</b>';
$lang['admin_database_prune_success'] = 'ตัดแต่งฐานข้อมูลเรียบร้อยแล้ว';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'ลบบันทึก';
$lang['admin_logs_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบไฟล์บันทึกที่เลือก?';
$lang['admin_logs_delete_error'] = 'ไม่สามารถลบไฟล์บันทึกได้';
$lang['admin_logs_delete_success'] = 'ลบไฟล์บันทึกสำเร็จแล้ว';
$lang['admin_logs_error_disabled'] = 'ขณะนี้ระบบบันทึกไม่ได้เปิดใช้งาน';
$lang['admin_logs_error_empty'] = 'ไม่พบบันทึก';
$lang['admin_logs_error_missing'] = 'ไม่พบไฟล์บันทึก หรือไฟล์นั้นว่างเปล่า';
$lang['admin_logs_tip'] = 'ระบบบันทึกสามารถสร้างไฟล์ขนาดใหญ่ได้อย่างรวดเร็ว สำหรับเว็บไซต์จริง ควรพิจารณาลบบันทึกเก่าเป็นระยะ';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบอีเมลที่เลือก?';
$lang['admin_emails_delete_error'] = 'ไม่สามารถลบอีเมลที่เลือกได้';
$lang['admin_emails_delete_success'] = 'ลบอีเมลที่เลือกสำเร็จแล้ว';
$lang['admin_emails_email_from'] = 'ส่งจาก';
$lang['admin_emails_mail_queue'] = 'คิวจดหมาย';
$lang['admin_emails_mailer'] = 'ส่งอีเมลจำนวนมาก';
$lang['admin_emails_search'] = 'ค้นหาอีเมลตามหัวเรื่องหรือเนื้อหา...';
$lang['admin_emails_send_error'] = 'ไม่สามารถเพิ่มอีเมลไปยังคิวได้ กรุณาลองอีกครั้ง.';
$lang['admin_emails_send_none'] = 'ไม่มีผู้ใช้ตรงตามเงื่อนไขที่เลือก.';
$lang['admin_emails_send_success'] = 'อีเมลถูกเพิ่มเข้าในคิวและจะถูกส่งเร็ว ๆ นี้.';
$lang['admin_emails_send_to_banned'] = 'ส่งถึงผู้ใช้ที่ถูกแบน';
$lang['admin_emails_send_to_deleted'] = 'ส่งถึงผู้ใช้ที่ถูกลบ';
$lang['admin_emails_send_to_disabled'] = 'ส่งถึงผู้ใช้ที่ไม่ได้ใช้งาน';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'เพิ่มผู้ใช้';
$lang['admin_users_all_users'] = 'ผู้ใช้ทั้งหมด';
$lang['admin_users_ban_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการแบนผู้ใช้ที่เลือก?';
$lang['admin_users_ban_error'] = 'ไม่สามารถแบนผู้ใช้ที่เลือกได้';
$lang['admin_users_ban_success'] = 'แบนผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบผู้ใช้ที่เลือก?';
$lang['admin_users_delete_error'] = 'ไม่สามารถลบผู้ใช้ที่เลือกได้';
$lang['admin_users_delete_success'] = 'ลบผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_disable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดการใช้งานผู้ใช้ที่เลือก?';
$lang['admin_users_disable_error'] = 'ไม่สามารถปิดการใช้งานผู้ใช้ที่เลือกได้';
$lang['admin_users_disable_success'] = 'ปิดการใช้งานผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_edit'] = 'แก้ไขผู้ใช้';
$lang['admin_users_edit_error'] = 'ไม่สามารถอัปเดตข้อมูลผู้ใช้ได้';
$lang['admin_users_edit_success'] = 'อัปเดตข้อมูลผู้ใช้เรียบร้อยแล้ว';
$lang['admin_users_enable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดการใช้งานผู้ใช้ที่เลือก?';
$lang['admin_users_enable_error'] = 'ไม่สามารถเปิดการใช้งานผู้ใช้ที่เลือกได้';
$lang['admin_users_enable_success'] = 'เปิดการใช้งานผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_groups'] = 'กลุ่มผู้ใช้';
$lang['admin_users_lock_confirm'] = 'คุณแน่ใจหรือว่าต้องการล็อกผู้ใช้ที่เลือกไว้?';
$lang['admin_users_lock_error'] = 'ไม่สามารถล็อกผู้ใช้ที่เลือกไว้ได้.';
$lang['admin_users_lock_success'] = 'ผู้ใช้ที่เลือกถูกล็อกสำเร็จแล้ว.';
$lang['admin_users_logged'] = 'ผู้ใช้ที่เข้าสู่ระบบ';
$lang['admin_users_manage'] = 'จัดการผู้ใช้';
$lang['admin_users_remove_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบผู้ใช้ที่เลือกและข้อมูลทั้งหมดของพวกเขาอย่างถาวร?';
$lang['admin_users_remove_error'] = 'ไม่สามารถลบผู้ใช้ที่เลือกและข้อมูลทั้งหมดของพวกเขาอย่างถาวรได้';
$lang['admin_users_remove_success'] = 'ลบผู้ใช้ที่เลือกและข้อมูลทั้งหมดของพวกเขาเรียบร้อยแล้ว';
$lang['admin_users_restore_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการคืนค่าผู้ใช้ที่เลือก?';
$lang['admin_users_restore_error'] = 'ไม่สามารถคืนค่าผู้ใช้ที่เลือกได้';
$lang['admin_users_restore_success'] = 'คืนค่าผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_search'] = 'ค้นหาตามชื่อ ผู้ใช้ หรืออีเมล...';
$lang['admin_users_unban_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการยกเลิกการแบนผู้ใช้ที่เลือก?';
$lang['admin_users_unban_error'] = 'ไม่สามารถยกเลิกการแบนผู้ใช้ที่เลือกได้';
$lang['admin_users_unban_success'] = 'ยกเลิกการแบนผู้ใช้ที่เลือกเรียบร้อยแล้ว';
$lang['admin_users_unlock_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปลดล็อกผู้ใช้ที่เลือกไว้?';
$lang['admin_users_unlock_error'] = 'ไม่สามารถปลดล็อกผู้ใช้ที่เลือกได้.';
$lang['admin_users_unlock_success'] = 'ปลดล็อกผู้ใช้ที่เลือกสำเร็จแล้ว.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'ล้างบันทึก';
$lang['admin_reports_clear_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการล้างบันทึกการกระทำทั้งหมด?';
$lang['admin_reports_clear_error'] = 'ไม่สามารถล้างบันทึกการกระทำได้';
$lang['admin_reports_clear_success'] = 'ล้างบันทึกการกระทำเรียบร้อยแล้ว';
$lang['admin_reports_latest_actions'] = 'การกระทำล่าสุด';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบไฟล์ที่เลือกไว้?';
$lang['admin_media_delete_error'] = 'ไม่สามารถลบไฟล์ได้';
$lang['admin_media_delete_success'] = 'ลบไฟล์เรียบร้อยแล้ว';
$lang['admin_media_file_delete_error'] = 'ไม่สามารถลบไฟล์ได้';
$lang['admin_media_file_delete_success'] = 'ลบไฟล์เรียบร้อยแล้ว';
$lang['admin_media_file_update_error'] = 'ไม่สามารถอัปเดตไฟล์ได้';
$lang['admin_media_file_update_success'] = 'อัปเดตไฟล์เรียบร้อยแล้ว';
$lang['admin_media_search'] = 'ค้นหาตามชื่อ คำอธิบาย หรือชื่อไฟล์...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{ไม่มีโมดูลที่เปิดใช้งาน} other{มี <b>#</b> จาก <b>%s</b> โมดูลที่เปิดใช้งาน}';
$lang['admin_modules_add'] = 'เพิ่มโมดูล';
$lang['admin_modules_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบโมดูล: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'ไม่สามารถลบโมดูลได้';
$lang['admin_modules_delete_error_active'] = 'ไม่สามารถลบโมดูลที่ใช้งานอยู่ได้';
$lang['admin_modules_delete_success'] = 'ลบโมดูลเรียบร้อยแล้ว';
$lang['admin_modules_disable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานโมดูลทั้งหมด?';
$lang['admin_modules_disable_all_error'] = 'ไม่สามารถปิดใช้งานโมดูลทั้งหมดได้';
$lang['admin_modules_disable_all_success'] = 'ปิดใช้งานโมดูลทั้งหมดเรียบร้อยแล้ว';
$lang['admin_modules_disable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานโมดูล: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'ไม่สามารถปิดใช้งานโมดูลได้';
$lang['admin_modules_disable_success'] = 'ปิดใช้งานโมดูลเรียบร้อยแล้ว';
$lang['admin_modules_enable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานโมดูลทั้งหมด?';
$lang['admin_modules_enable_all_error'] = 'ไม่สามารถเปิดใช้งานโมดูลทั้งหมดได้';
$lang['admin_modules_enable_all_success'] = 'เปิดใช้งานโมดูลทั้งหมดเรียบร้อยแล้ว';
$lang['admin_modules_enable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานโมดูล: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'ไม่สามารถเปิดใช้งานโมดูลได้';
$lang['admin_modules_enable_success'] = 'เปิดใช้งานโมดูลเรียบร้อยแล้ว';
$lang['admin_modules_global'] = 'โมดูลส่วนกลาง (ใช้ร่วมกัน)';
$lang['admin_modules_install_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการติดตั้งโมดูล: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'ติดตั้งโมดูลไม่สำเร็จ';
$lang['admin_modules_install_success'] = 'ติดตั้งโมดูลสำเร็จแล้ว';
$lang['admin_modules_install_tip'] = 'โมดูลช่วยเพิ่มฟีเจอร์และความสามารถใหม่ให้กับเว็บไซต์ของคุณ เรียกดูโมดูลได้ใน <a href="%s" target="_blank" rel="noopener">ไดเรกทอรีโมดูล</a> หรืออัปโหลดไฟล์ <b>.zip</b> เพื่อเพิ่มโมดูล';
$lang['admin_modules_update_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการอัปเดตโมดูลนี้?';
$lang['admin_modules_update_error'] = 'อัปเดตโมดูลไม่สำเร็จ';
$lang['admin_modules_update_success'] = 'อัปเดตโมดูลสำเร็จแล้ว';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{ไม่มีปลั๊กอินที่เปิดใช้งาน} other{มี <b>#</b> จาก <b>%s</b> ปลั๊กอินที่เปิดใช้งาน}';
$lang['admin_plugins_add'] = 'เพิ่มปลั๊กอิน';
$lang['admin_plugins_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบปลั๊กอิน: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'ไม่สามารถลบปลั๊กอินได้';
$lang['admin_plugins_delete_error_active'] = 'ไม่สามารถลบปลั๊กอินที่ใช้งานอยู่ได้';
$lang['admin_plugins_delete_success'] = 'ลบปลั๊กอินเรียบร้อยแล้ว';
$lang['admin_plugins_disable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานปลั๊กอินทั้งหมด?';
$lang['admin_plugins_disable_all_error'] = 'ไม่สามารถปิดใช้งานปลั๊กอินทั้งหมดได้';
$lang['admin_plugins_disable_all_success'] = 'ปิดใช้งานปลั๊กอินทั้งหมดเรียบร้อยแล้ว';
$lang['admin_plugins_disable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานปลั๊กอิน: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'ไม่สามารถปิดใช้งานปลั๊กอินได้';
$lang['admin_plugins_disable_success'] = 'ปิดใช้งานปลั๊กอินเรียบร้อยแล้ว';
$lang['admin_plugins_enable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานปลั๊กอินทั้งหมด?';
$lang['admin_plugins_enable_all_error'] = 'ไม่สามารถเปิดใช้งานปลั๊กอินทั้งหมดได้';
$lang['admin_plugins_enable_all_success'] = 'เปิดใช้งานปลั๊กอินทั้งหมดเรียบร้อยแล้ว';
$lang['admin_plugins_enable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานปลั๊กอิน: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'ไม่สามารถเปิดใช้งานปลั๊กอินได้';
$lang['admin_plugins_enable_success'] = 'เปิดใช้งานปลั๊กอินเรียบร้อยแล้ว';
$lang['admin_plugins_global'] = 'ปลั๊กอินส่วนกลาง (ใช้ร่วมกัน)';
$lang['admin_plugins_install_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการติดตั้งปลั๊กอิน: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'ติดตั้งปลั๊กอินไม่สำเร็จ';
$lang['admin_plugins_install_success'] = 'ติดตั้งปลั๊กอินสำเร็จแล้ว';
$lang['admin_plugins_install_tip'] = 'ปลั๊กอินช่วยขยายฟีเจอร์ที่มีอยู่ เพิ่มตัวเลือกหรือการเชื่อมต่อใหม่ ๆ สามารถติดตั้งได้จาก <a href="%s" target="_blank" rel="noopener">ไดเรกทอรีปลั๊กอิน</a> หรืออัปโหลดไฟล์ <b>.zip</b>';
$lang['admin_plugins_update_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการอัปเดตปลั๊กอินนี้?';
$lang['admin_plugins_update_error'] = 'อัปเดตปลั๊กอินไม่สำเร็จ';
$lang['admin_plugins_update_success'] = 'อัปเดตปลั๊กอินสำเร็จแล้ว';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'เพิ่มธีม';
$lang['admin_themes_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบธีม: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'ไม่สามารถลบธีมได้';
$lang['admin_themes_delete_error_active'] = 'ไม่สามารถลบธีมที่ใช้งานอยู่ในปัจจุบันได้';
$lang['admin_themes_delete_success'] = 'ลบธีมเรียบร้อยแล้ว';
$lang['admin_themes_disable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานธีม: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'ไม่สามารถปิดใช้งานธีมได้';
$lang['admin_themes_disable_error_active'] = 'ไม่สามารถปิดใช้งานธีมที่ใช้งานอยู่ได้';
$lang['admin_themes_disable_success'] = 'ปิดใช้งานธีมเรียบร้อยแล้ว';
$lang['admin_themes_enable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานธีม: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'ไม่สามารถเปิดใช้งานธีมได้';
$lang['admin_themes_enable_success'] = 'เปิดใช้งานธีมเรียบร้อยแล้ว';
$lang['admin_themes_install_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการติดตั้งธีม: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'ติดตั้งธีมไม่สำเร็จ';
$lang['admin_themes_install_success'] = 'ติดตั้งธีมสำเร็จแล้ว';
$lang['admin_themes_install_tip'] = 'ธีมเปลี่ยนลักษณะและการจัดวางของเว็บไซต์ของคุณ เลือกจาก <a href="%s" target="_blank" rel="noopener">คลังธีม</a> หรืออัปโหลดไฟล์ <b>.zip</b> เพื่อติดตั้งธีมของคุณเอง';
$lang['admin_themes_none_tip'] = 'แอปพลิเคชันนี้กำลังทำงานโดยไม่มีธีม ติดตั้งธีมเพื่อปรับแต่งอินเทอร์เฟซสาธารณะ';
$lang['admin_themes_update_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการอัปเดตธีมนี้?';
$lang['admin_themes_update_error'] = 'อัปเดตธีมไม่สำเร็จ';
$lang['admin_themes_update_success'] = 'อัปเดตธีมสำเร็จแล้ว';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'เมนู';
$lang['admin_menus_assign_error'] = 'ไม่สามารถอัปเดตตำแหน่งเมนูได้';
$lang['admin_menus_assign_success'] = 'อัปเดตตำแหน่งเมนูเรียบร้อยแล้ว';
$lang['admin_menus_header'] = 'มี <b>%s</b> ตำแหน่งเมนูที่สามารถใช้ได้';
$lang['admin_menus_location'] = 'ตำแหน่ง';
$lang['admin_menus_locations'] = 'ตำแหน่งเมนู';
$lang['admin_menus_manage'] = 'จัดการเมนู';
$lang['admin_menus_menu'] = 'เมนูที่กำหนดไว้';
$lang['admin_menus_none'] = '&#151; ไม่มี &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'เพิ่มภาษา';
$lang['admin_languages_default_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการตั้งค่านี้เป็นภาษาหลักของเว็บไซต์?';
$lang['admin_languages_default_error'] = 'ไม่สามารถเปลี่ยนภาษาหลักได้';
$lang['admin_languages_default_error_nochange'] = 'ภาษานี้เป็นภาษาหลักอยู่แล้ว';
$lang['admin_languages_default_success'] = 'เปลี่ยนภาษาหลักเรียบร้อยแล้ว';
$lang['admin_languages_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการลบภาษา: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'ลบภาษาไม่สำเร็จ';
$lang['admin_languages_delete_error_active'] = 'ไม่สามารถลบภาษาที่ใช้งานอยู่ได้';
$lang['admin_languages_delete_error_default'] = 'ไม่สามารถลบภาษาเริ่มต้นได้';
$lang['admin_languages_delete_success'] = 'ลบภาษาสำเร็จแล้ว';
$lang['admin_languages_disable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานทุกภาษา?';
$lang['admin_languages_disable_all_error'] = 'ไม่สามารถปิดใช้งานทุกภาษาได้';
$lang['admin_languages_disable_all_success'] = 'ปิดใช้งานทุกภาษาสำเร็จแล้ว';
$lang['admin_languages_disable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปิดใช้งานภาษา: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'ไม่สามารถปิดใช้งานภาษาได้';
$lang['admin_languages_disable_error_default'] = 'ไม่สามารถปิดการใช้งานภาษาหลักได้.';
$lang['admin_languages_disable_error_nochange'] = 'ภาษานี้ถูกปิดใช้งานอยู่แล้ว';
$lang['admin_languages_disable_success'] = 'ปิดใช้งานภาษาสำเร็จแล้ว';
$lang['admin_languages_enable_all_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานทุกภาษา?';
$lang['admin_languages_enable_all_error'] = 'ไม่สามารถเปิดใช้งานทุกภาษาได้';
$lang['admin_languages_enable_all_success'] = 'เปิดใช้งานทุกภาษาสำเร็จแล้ว';
$lang['admin_languages_enable_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการเปิดใช้งานภาษา: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'ไม่สามารถเปิดใช้งานภาษาได้';
$lang['admin_languages_enable_error_nochange'] = 'ภาษานี้ถูกเปิดใช้งานอยู่แล้ว';
$lang['admin_languages_enable_success'] = 'เปิดใช้งานภาษาสำเร็จแล้ว';
$lang['admin_languages_install_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการติดตั้งภาษา: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'ติดตั้งภาษาไม่สำเร็จ';
$lang['admin_languages_install_success'] = 'ติดตั้งภาษาสำเร็จแล้ว';
$lang['admin_languages_install_tip'] = 'ภาษาจะเพิ่มคำแปลสำหรับอินเทอร์เฟซและเนื้อหาของไซต์ของคุณ เรียกดูภาษาที่มีอยู่ใน<a href="%s" target="_blank" rel="noopener">ไดเรกทอรีภาษา</a> หรืออัปโหลดแพ็กเกจ <b>.zip</b> เพื่อติดตั้งภาษาของคุณเอง';
$lang['admin_languages_tip'] = 'เปิดใช้งาน ปิดใช้งาน และตั้งค่าภาษาเริ่มต้นของเว็บไซต์ ภาษาที่เปิดใช้งานจะพร้อมให้ผู้เข้าชมเลือกใช้ได้';
$lang['admin_languages_update_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการอัปเดตภาษานี้?';
$lang['admin_languages_update_error'] = 'อัปเดตภาษาไม่สำเร็จ';
$lang['admin_languages_update_success'] = 'อัปเดตภาษาสำเร็จแล้ว';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'แพ็กเกจนี้มีอยู่แล้ว';
$lang['package_archive_download_failed'] = 'ไม่สามารถดาวน์โหลดไฟล์เก็บถาวรของแพ็กเกจได้';
$lang['package_backup_create_error'] = 'สร้างไฟล์สำรองข้อมูลแพ็กเกจไม่สำเร็จ';
$lang['package_backup_dir_failed'] = 'ไม่สามารถสร้างไดเรกทอรีสำรองข้อมูล %s ได้';
$lang['package_backup_missing'] = 'ไม่พบไฟล์สำรองข้อมูล';
$lang['package_backup_path_error'] = 'ไม่สามารถระบุเส้นทางของไฟล์สำรองข้อมูลได้';
$lang['package_backup_request_invalid'] = 'คำขอสำรองข้อมูลไม่ถูกต้อง';
$lang['package_backup_restore_error'] = 'กู้คืนข้อมูลสำรองแพ็กเกจไม่สำเร็จ';
$lang['package_catalog_type_unknown'] = 'ไม่ทราบประเภทแค็ตตาล็อก';
$lang['package_checksum_error'] = 'การตรวจสอบค่าเช็คซัม (checksum) ของแพ็กเกจล้มเหลว';
$lang['package_copy_files_error'] = 'คัดลอกไฟล์แพ็กเกจไปยังปลายทางไม่สำเร็จ';
$lang['package_copy_updates_error'] = 'คัดลอกไฟล์อัปเดตไปยังปลายทางไม่สำเร็จ';
$lang['package_dest_dir_failed'] = 'ไม่สามารถสร้างไดเรกทอรีปลายทาง %s ได้';
$lang['package_destination_error'] = 'ไม่สามารถระบุปลายทางของแพ็กเกจได้';
$lang['package_download_dir_failed'] = 'ไม่สามารถสร้างไดเรกทอรีดาวน์โหลด %s ได้';
$lang['package_download_empty'] = 'การดาวน์โหลดแพ็กเกจส่งคืนการตอบกลับที่ว่างเปล่า';
$lang['package_download_request_invalid'] = 'คำขอ,ดาวน์โหลดแพ็กเกจไม่ถูกต้อง';
$lang['package_extract_failed'] = 'ไม่สามารถแตกไฟล์ ZIP %s ได้';
$lang['package_invalid_lang_files'] = 'ภาษาไม่ถูกต้อง — ไม่พบไฟล์ภาษาของแอปพลิเคชันที่จำเป็น';
$lang['package_invalid_lang_structure'] = 'ภาษาไม่ถูกต้อง — ไม่พบไดเรกทอรี admin และ/หรือ ci3';
$lang['package_invalid_missing_info'] = '%s ไม่ถูกต้อง: ไม่พบไฟล์ "info.php"';
$lang['package_invalid_module_structure'] = 'โมดูลไม่ถูกต้อง — ไม่พบไดเรกทอรี config และ/หรือ controllers ที่จำเป็น';
$lang['package_invalid_plugin_boot'] = 'ปลั๊กอินไม่ถูกต้อง — ไม่พบไฟล์ "boot.php"';
$lang['package_invalid_plugin_contents'] = 'ปลั๊กอินไม่ถูกต้อง — ปลั๊กอินต้องไม่มีคอนโทรลเลอร์หรือมุมมอง (views)';
$lang['package_invalid_theme_boot'] = 'ธีมไม่ถูกต้อง — ไม่พบไฟล์ "boot.php"';
$lang['package_invalid_theme_views'] = 'ธีมไม่ถูกต้อง — ไม่พบไดเรกทอรี views';
$lang['package_no_root_dir'] = 'แพ็กเกจไม่มีไดเรกทอรีราก (root directory)';
$lang['package_not_downloadable'] = 'แพ็กเกจนี้ไม่สามารถดาวน์โหลดได้แบบสาธารณะ';
$lang['package_not_in_registry'] = 'ไม่มีแพ็กเกจนี้ในรีจิสทรีสาธารณะ';
$lang['package_request_invalid'] = 'คำขอแพ็กเกจไม่ถูกต้อง';
$lang['package_rollback_request_invalid'] = 'คำขอย้อนกลับ (rollback) ไม่ถูกต้อง';
$lang['package_root_mismatch'] = 'รากของไฟล์เก็บถาวรแพ็กเกจไม่ตรงกับ %s';
$lang['package_single_root_required'] = 'แพ็กเกจต้องมีไดเรกทอรีรากเพียงหนึ่งเดียวเท่านั้น';
$lang['package_source_error'] = 'ไม่สามารถระบุแหล่งที่มาของแพ็กเกจได้';
$lang['package_system_core_restricted'] = 'ไม่สามารถติดตั้งส่วนประกอบระบบเป็นแพ็กเกจได้';
$lang['package_temp_dir_failed'] = 'ไม่สามารถสร้างไดเรกทอรีชั่วคราว %s ได้';
$lang['package_type_unknown'] = 'ไม่ทราบประเภทแพ็กเกจ';
$lang['package_update_request_invalid'] = 'คำขออัปเดตแพ็กเกจไม่ถูกต้อง';
$lang['package_update_root_mismatch'] = 'รากของไฟล์เก็บถาวรการอัปเดตไม่ตรงกับ %s';
$lang['package_upload_dir_failed'] = 'ไม่สามารถสร้างไดเรกทอรีอัปโหลด %s ได้';
$lang['package_url_invalid'] = 'URL การแจกจ่ายแพ็กเกจไม่ถูกต้อง';
$lang['package_write_failed'] = 'ไม่สามารถเขียนแพ็กเกจลงใน %s ได้';
$lang['package_zip_not_found'] = 'ไม่พบไฟล์ ZIP ของแพ็กเกจ: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'มีอัปเดตใหม่!';
$lang['update_backup_error'] = 'ไม่สามารถสร้างข้อมูลสำรองของแพ็กเกจที่มีอยู่ได้ การอัปเดตถูกยกเลิก';
$lang['update_check_disabled'] = 'การตรวจสอบอัปเดตอัตโนมัติถูกปิดใช้งาน เปิดใช้งานเพื่อดูอัปเดต';
$lang['update_check_error'] = 'ไม่สามารถเรียกใช้การตรวจสอบอัปเดตในขณะนี้';
$lang['update_check_success'] = 'การตรวจสอบอัปเดตเสร็จสมบูรณ์';
$lang['update_install_error'] = 'ไม่สามารถติดตั้งแพ็กเกจได้ เวอร์ชันก่อนหน้าถูกเก็บไว้';
$lang['update_install_success'] = 'อัปเดตแพ็กเกจเป็นเวอร์ชันล่าสุดสำเร็จแล้ว';
$lang['update_interval_3days'] = 'ทุก 3 วัน';
$lang['update_interval_biweekly'] = 'ทุก 2 สัปดาห์';
$lang['update_interval_daily'] = 'ทุกวัน';
$lang['update_interval_monthly'] = 'เดือนละครั้ง';
$lang['update_interval_weekly'] = 'สัปดาห์ละครั้ง';
$lang['update_not_available'] = 'เว็บไซต์ของคุณเป็นเวอร์ชันล่าสุดแล้ว';
$lang['update_rollback_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการคืนค่าเวอร์ชันก่อนหน้า?';
$lang['update_rollback_error'] = 'ไม่สามารถกู้คืนเวอร์ชันก่อนหน้าได้ อาจต้องมีการดำเนินการด้วยตนเอง';
$lang['update_rollback_success'] = 'กู้คืนเวอร์ชันก่อนหน้าสำเร็จแล้ว';
$lang['updates_available'] = 'อัปเดตที่มีให้';
$lang['updates_check_now'] = 'ตรวจสอบทันที';
$lang['updates_check_now_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการตรวจสอบอัปเดตตอนนี้?';
$lang['updates_current_version'] = 'เวอร์ชันปัจจุบัน';
$lang['updates_enable'] = 'เปิดใช้งานอัปเดต';
$lang['updates_last_check'] = 'การตรวจสอบครั้งล่าสุด: %s';
$lang['updates_latest_version'] = 'เวอร์ชันล่าสุด';
$lang['updates_next_check'] = 'การตรวจสอบที่กำหนดไว้ครั้งถัดไป: %s';
$lang['updates_previous_version'] = 'เวอร์ชันก่อนหน้า';
$lang['updates_recent'] = 'อัปเดตล่าสุด';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'การบล็อก IP แอดเดรสที่ระบุล้มเหลว';
$lang['admin_firewall_ban_success'] = 'IP แอดเดรสถูกบล็อกเรียบร้อยแล้ว';
$lang['admin_firewall_block_ip'] = 'บล็อก IP แอดเดรส';
$lang['admin_firewall_delete_confirm'] = 'คุณแน่ใจหรือไม่ว่าต้องการปลดบล็อก IP แอดเดรสที่เลือก?';
$lang['admin_firewall_delete_error'] = 'การปลดบล็อก IP แอดเดรสที่เลือกล้มเหลว';
$lang['admin_firewall_delete_success'] = 'IP แอดเดรสที่เลือกถูกปลดบล็อกเรียบร้อยแล้ว';
$lang['admin_firewall_duration'] = 'ระยะเวลาการบล็อก';
$lang['admin_firewall_permanent'] = 'ถาวร';
$lang['admin_firewall_reason'] = 'เหตุผลการบล็อก';
$lang['admin_firewall_tip'] = 'ดูและจัดการ IP แอดเดรสที่ถูกบล็อกโดยไฟร์วอลล์เนื่องจากการละเมิดซ้ำๆ หรือกิจกรรมที่น่าสงสัย';

// Settings
$lang['404_ban_duration'] = 'ระยะเวลาการแบน 404';
$lang['404_threshold'] = 'ขีดจำกัดการเกิดข้อผิดพลาด 404';
$lang['uri_ban_duration'] = 'ระยะเวลาการแบน URI';
$lang['uri_strike_threshold'] = 'ขีดจำกัดการเกิดข้อผิดพลาด URI';
