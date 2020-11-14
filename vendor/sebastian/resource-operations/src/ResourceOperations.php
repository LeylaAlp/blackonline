<?php declare(strict_types=1);
/*
 * This file is part of resource-operations.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\ResourceOperations;

final class ResourceOperations
{
    /**
     * @return string[]
     */
    public static function getFunctions(): array
    {
        return [
            'Directory::close',
            'Directory::read',
            'Directory::rewind',
            'DirectoryIterator::openFile',
            'FilesystemIterator::openFile',
            'Gmagick::readimagefile',
            'HttpResponse::getRequestBodyStream',
            'HttpResponse::getStream',
            'HttpResponse::setStream',
            'Imagick::pingImageFile',
            'Imagick::readImageFile',
            'Imagick::writeImageFile',
            'Imagick::writeImagesFile',
            'MongoGridFSCursor::__construct',
            'MongoGridFSFile::getResource',
            'MysqlndUhConnection::stmtInit',
            'MysqlndUhConnection::storeResult',
            'MysqlndUhConnection::useResult',
            'PDF_activate_item',
            'PDF_add_launchlink',
            'PDF_add_locallink',
            'PDF_add_nameddest',
            'PDF_add_note',
            'PDF_add_pdflink',
            'PDF_add_table_cell',
            'PDF_add_textflow',
            'PDF_add_thumbnail',
            'PDF_add_weblink',
            'PDF_arc',
            'PDF_arcn',
            'PDF_attach_file',
            'PDF_begin_document',
            'PDF_begin_font',
            'PDF_begin_glyph',
            'PDF_begin_item',
            'PDF_begin_layer',
            'PDF_begin_page',
            'PDF_begin_page_ext',
            'PDF_begin_pattern',
            'PDF_begin_template',
            'PDF_begin_template_ext',
            'PDF_circle',
            'PDF_clip',
            'PDF_close',
            'PDF_close_image',
            'PDF_close_pdi',
            'PDF_close_pdi_page',
            'PDF_closepath',
            'PDF_closepath_fill_stroke',
            'PDF_closepath_stroke',
            'PDF_concat',
            'PDF_continue_text',
            'PDF_create_3dview',
            'PDF_create_action',
            'PDF_create_annotation',
            'PDF_create_bookmark',
            'PDF_create_field',
            'PDF_create_fieldgroup',
            'PDF_create_gstate',
            'PDF_create_pvf',
            'PDF_create_textflow',
            'PDF_curveto',
            'PDF_define_layer',
            'PDF_delete',
            'PDF_delete_pvf',
            'PDF_delete_table',
            'PDF_delete_textflow',
            'PDF_encoding_set_char',
            'PDF_end_document',
            'PDF_end_font',
            'PDF_end_glyph',
            'PDF_end_item',
            'PDF_end_layer',
            'PDF_end_page',
            'PDF_end_page_ext',
            'PDF_end_pattern',
            'PDF_end_template',
            'PDF_endpath',
            'PDF_fill',
            'PDF_fill_imageblock',
            'PDF_fill_pdfblock',
            'PDF_fill_stroke',
            'PDF_fill_textblock',
            'PDF_findfont',
            'PDF_fit_image',
            'PDF_fit_pdi_page',
            'PDF_fit_table',
            'PDF_fit_textflow',
            'PDF_fit_textline',
            'PDF_get_apiname',
            'PDF_get_buffer',
            'PDF_get_errmsg',
            'PDF_get_errnum',
            'PDF_get_parameter',
            'PDF_get_pdi_parameter',
            'PDF_get_pdi_value',
            'PDF_get_value',
            'PDF_info_font',
            'PDF_info_matchbox',
            'PDF_info_table',
            'PDF_info_textflow',
            'PDF_info_textline',
            'PDF_initgraphics',
            'PDF_lineto',
            'PDF_load_3ddata',
            'PDF_load_font',
            'PDF_load_iccprofile',
            'PDF_load_image',
            'PDF_makespotcolor',
            'PDF_moveto',
            'PDF_new',
            'PDF_open_ccitt',
            'PDF_open_file',
            'PDF_open_image',
            'PDF_open_image_file',
            'PDF_open_memory_image',
            'PDF_open_pdi',
            'PDF_open_pdi_document',
            'PDF_open_pdi_page',
            'PDF_pcos_get_number',
            'PDF_pcos_get_stream',
            'PDF_pcos_get_string',
            'PDF_place_image',
            'PDF_place_pdi_page',
            'PDF_process_pdi',
            'PDF_rect',
            'PDF_restore',
            'PDF_resume_page',
            'PDF_rotate',
            'PDF_save',
            'PDF_scale',
            'PDF_set_border_color',
            'PDF_set_border_dash',
            'PDF_set_border_style',
            'PDF_set_gstate',
            'PDF_set_info',
            'PDF_set_layer_dependency',
            'PDF_set_parameter',
            'PDF_set_text_pos',
            'PDF_set_value',
            'PDF_setcolor',
            'PDF_setdash',
            'PDF_setdashpattern',
            'PDF_setflat',
            'PDF_setfont',
            'PDF_setgray',
            'PDF_setgray_fill',
            'PDF_setgray_stroke',
            'PDF_setlinecap',
            'PDF_setlinejoin',
            'PDF_setlinewidth',
            'PDF_setmatrix',
            'PDF_setmiterlimit',
            'PDF_setrgbcolor',
            'PDF_setrgbcolor_fill',
            'PDF_setrgbcolor_stroke',
            'PDF_shading',
            'PDF_shading_pattern',
            'PDF_shfill',
            'PDF_show',
            'PDF_show_boxed',
            'PDF_show_xy',
            'PDF_skew',
            'PDF_stringwidth',
            'PDF_stroke',
            'PDF_suspend_page',
            'PDF_translate',
            'PDF_utf16_to_utf8',
            'PDF_utf32_to_utf16',
            'PDF_utf8_to_utf16',
            'PDO::pgsqlLOBOpen',
            'RarEntry::getStream',
            'SQLite3::openBlob',
            'SWFMovie::saveToFile',
            'SplFileInfo::openFile',
            'SplFileObject::openFile',
            'SplTempFileObject::openFile',
            'V8Js::compileString',
            'V8Js::executeScript',
            'Vtiful\Kernel\Excel::setColumn',
            'Vtiful\Kernel\Excel::setRow',
            'Vtiful\Kernel\Format::align',
            'Vtiful\Kernel\Format::bold',
            'Vtiful\Kernel\Format::italic',
            'Vtiful\Kernel\Format::underline',
            'XMLWriter::openMemory',
            'XMLWriter::openURI',
            'ZipArchive::getStream',
            'Zookeeper::setLogStream',
            'apc_bin_dumpfile',
            'apc_bin_loadfile',
            'bbcode_add_element',
            'bbcode_add_smiley',
            'bbcode_create',
            'bbcode_destroy',
            'bbcode_parse',
            'bbcode_set_arg_parser',
            'bbcode_set_flags',
            'bcompiler_read',
            'bcompiler_write_class',
            'bcompiler_write_constant',
            'bcompiler_write_exe_footer',
            'bcompiler_write_file',
            'bcompiler_write_footer',
            'bcompiler_write_function',
            'bcompiler_write_functions_from_file',
            'bcompiler_write_header',
            'bcompiler_write_included_filename',
            'bzclose',
            'bzerrno',
            'bzerror',
            'bzerrstr',
            'bzflush',
            'bzopen',
            'bzread',
            'bzwrite',
            'cairo_surface_write_to_png',
            'closedir',
            'copy',
            'crack_closedict',
            'crack_opendict',
            'cubrid_bind',
            'cubrid_close_prepare',
            'cubrid_close_request',
            'cubrid_col_get',
            'cubrid_col_size',
            'cubrid_column_names',
            'cubrid_column_types',
            'cubrid_commit',
            'cubrid_connect',
            'cubrid_connect_with_url',
            'cubrid_current_oid',
            'cubrid_db_parameter',
            'cubrid_disconnect',
            'cubrid_drop',
            'cubrid_fetch',
            'cubrid_free_result',
            'cubrid_get',
            'cubrid_get_autocommit',
            'cubrid_get_charset',
            'cubrid_get_class_name',
            'cubrid_get_db_parameter',
            'cubrid_get_query_timeout',
            'cubrid_get_server_info',
            'cubrid_insert_id',
            'cubrid_is_instance',
            'cubrid_lob2_bind',
            'cubrid_lob2_close',
            'cubrid_lob2_export',
            'cubrid_lob2_import',
            'cubrid_lob2_new',
            'cubrid_lob2_read',
            'cubrid_lob2_seek',
            'cubrid_lob2_seek64',
            'cubrid_lob2_size',
            'cubrid_lob2_size64',
            'cubrid_lob2_tell',
            'cubrid_lob2_tell64',
            'cubrid_lob2_write',
            'cubrid_lob_export',
            'cubrid_lob_get',
            'cubrid_lob_send',
            'cubrid_lob_size',
            'cubrid_lock_read',
            'cubrid_lock_write',
            'cubrid_move_cursor',
            'cubrid_next_result',
            'cubrid_num_cols',
            'cubrid_num_rows',
            'cubrid_pconnect',
            'cubrid_pconnect_with_url',
            'cubrid_prepare',
            'cubrid_put',
            'cubrid_query',
            'cubrid_rollback',
            'cubrid_schema',
            'cubrid_seq_add',
            'cubrid_seq_drop',
            'cubrid_seq_insert',
            'cubrid_seq_put',
            'cubrid_set_add',
            'cubrid_set_autocommit',
            'cubrid_set_db_parameter',
            'cubrid_set_drop',
            'cubrid_set_query_timeout',
            'cubrid_unbuffered_query',
            'curl_close',
            'curl_copy_handle',
            'curl_errno',
            'curl_error',
            'curl_escape',
            'curl_exec',
            'curl_getinfo',
            'curl_multi_add_handle',
            'curl_multi_close',
            'curl_multi_errno',
            'curl_multi_exec',
            'curl_multi_getcontent',
            'curl_multi_info_read',
            'curl_multi_remove_handle',
            'curl_multi_select',
            'curl_multi_setopt',
            'curl_pause',
            'curl_reset',
            'curl_setopt',
            'curl_setopt_array',
            'curl_share_close',
            'curl_share_errno',
            'curl_share_init',
            'curl_share_setopt',
            'curl_unescape',
            'cyrus_authenticate',
            'cyrus_bind',
            'cyrus_close',
            'cyrus_connect',
            'cyrus_query',
            'cyrus_unbind',
            'db2_autocommit',
            'db2_bind_param',
            'db2_client_info',
            'db2_close',
            'db2_column_privileges',
            'db2_columns',
            'db2_commit',
            'db2_conn_error',
            'db2_conn_errormsg',
            'db2_connect',
            'db2_cursor_type',
            'db2_exec',
            'db2_execute',
            'db2_fetch_array',
            'db2_fetch_assoc',
            'db2_fetch_both',
            'db2_fetch_object',
            'db2_fetch_row',
            'db2_field_display_size',
            'db2_field_name',
            'db2_field_num',
            'db2_field_precision',
            'db2_field_scale',
            'db2_field_type',
            'db2_field_width',
            'db2_foreign_keys',
            'db2_free_result',
            'db2_free_stmt',
            'db2_get_option',
            'db2_last_insert_id',
            'db2_lob_read',
            'db2_next_result',
            'db2_num_fields',
            'db2_num_rows',
            'db2_pclose',
            'db2_pconnect',
            'db2_prepare',
            'db2_primary_keys',
            'db2_procedure_columns',
            'db2_procedures',
            'db2_result',
            'db2_rollback',
            'db2_server_info',
            'db2_set_option',
            'db2_special_columns',
            'db2_statistics',
            'db2_stmt_error',
            'db2_stmt_errormsg',
            'db2_table_privileges',
            'db2_tables',
            'dba_close',
            'dba_delete',
            'dba_exists',
            'dba_fetch',
            'dba_firstkey',
            'dba_insert',
            'dba_nextkey',
            'dba_open',
            'dba_optimize',
            'dba_popen',
            'dba_replace',
            'dba_sync',
            'dbplus_add',
            'dbplus_aql',
            'dbplus_close',
            'dbplus_curr',
            'dbplus_find',
            'dbplus_first',
            'dbplus_flush',
            'dbplus_freelock',
            'dbplus_freerlocks',
            'dbplus_getlock',
            'dbplus_getunique',
            'dbplus_info',
            'dbplus_last',
            'dbplus_lockrel',
            'dbplus_next',
            'dbplus_open',
            'dbplus_prev',
            'dbplus_rchperm',
            'dbplus_rcreate',
            'dbplus_rcrtexact',
            'dbplus_rcrtlike',
            'dbplus_restorepos',
            'dbplus_rkeys',
            'dbplus_ropen',
            'dbplus_rquery',
            'dbplus_rrename',
            'dbplus_rsecindex',
            'dbplus_runlink',
            'dbplus_rzap',
            'dbplus_savepos',
            'dbplus_setindex',
            'dbplus_setindexbynumber',
            'dbplus_sql',
            'dbplus_tremove',
            'dbplus_undo',
            'dbplus_undoprepare',
            'dbplus_unlockrel',
            'dbplus_unselect',
            'dbplus_update',
            'dbplus_xlockrel',
            'dbplus_xunlockrel',
            'deflate_add',
            'dio_close',
            'dio_fcntl',
            'dio_open',
            'dio_read',
            'dio_seek',
            'dio_stat',
            'dio_tcsetattr',
            'dio_truncate',
            'dio_write',
            'dir',
            'eio_busy',
            'eio_cancel',
            'eio_chmod',
            'eio_chown',
            'eio_close',
            'eio_custom',
            'eio_dup2',
            'eio_fallocate',
            'eio_fchmod',
            'eio_fchown',
            'eio_fdatasync',
            'eio_fstat',
            'eio_fstatvfs',
            'eio_fsync',
            'eio_ftruncate',
            'eio_futime',
            'eio_get_last_error',
            'eio_grp',
            'eio_grp_add',
            'eio_grp_cancel',
            'eio_grp_limit',
            'eio_link',
            'eio_lstat',
            'eio_mkdir',
            'eio_mknod',
            'eio_nop',
            'eio_open',
            'eio_read',
            'eio_readahead',
            'eio_readdir',
            'eio_readlink',
            'eio_realpath',
            'eio_rename',
            'eio_rmdir',
            'eio_seek',
            'eio_sendfile',
            'eio_stat',
            'eio_statvfs',
            'eio_symlink',
            'eio_sync',
            'eio_sync_file_range',
            'eio_syncfs',
            'eio_truncate',
            'eio_unlink',
            'eio_utime',
            'eio_write',
            'enchant_broker_describe',
            'enchant_broker_dict_exists',
            'enchant_broker_free',
            'enchant_broker_free_dict',
            'enchant_broker_get_dict_path',
            'enchant_broker_get_error',
            'enchant_broker_init',
            'enchant_broker_list_dicts',
            'enchant_broker_request_dict',
            'enchant_broker_request_pwl_dict',
            'enchant_broker_set_dict_path',
            'enchant_broker_set_ordering',
            'enchant_dict_add_to_personal',
            'enchant_dict_add_to_session',
            'enchant_dict_check',
            'enchant_dict_describe',
            'enchant_dict_get_error',
            'enchant_dict_is_in_session',
            'enchant_dict_quick_check',
            'enchant_dict_store_replacement',
            'enchant_dict_suggest',
            'event_add',
            'event_base_free',
            'event_base_loop',
            'event_base_loopbreak',
            'event_base_loopexit',
            'event_base_new',
            'event_base_priority_init',
            'event_base_reinit',
            'event_base_set',
            'event_buffer_base_set',
            'event_buffer_disable',
            'event_buffer_enable',
            'event_buffer_fd_set',
            'event_buffer_free',
            'event_buffer_new',
            'event_buffer_priority_set',
            'event_buffer_read',
            'event_buffer_set_callback',
            'event_buffer_timeout_set',
            'event_buffer_watermark_set',
            'event_buffer_write',
            'event_del',
            'event_free',
            'event_new',
            'event_priority_set',
            'event_set',
            'event_timer_add',
            'event_timer_del',
            'event_timer_pending',
            'event_timer_set',
            'expect_expectl',
            'expect_popen',
            'fam_cancel_monitor',
            'fam_close',
            'fam_monitor_collection',
            'fam_monitor_directory',
            'fam_monitor_file',
            'fam_next_event',
            'fam_open',
            'fam_pending',
            'fam_resume_monitor',
            'fam_suspend_monitor',
            'fann_cascadetrain_on_data',
            'fann_cascadetrain_on_file',
            'fann_clear_scaling_params',
            'fann_copy',
            'fann_create_from_file',
            'fann_create_shortcut_array',
            'fann_create_standard',
            'fann_create_standard_array',
            'fann_create_train',
            'fann_create_train_from_callback',
            'fann_descale_input',
            'fann_descale_output',
            'fann_descale_train',
            'fann_destroy',
            'fann_destroy_train',
            'fann_duplicate_train_data',
            'fann_get_MSE',
            'fann_get_activation_function',
            'fann_get_activation_steepness',
            'fann_get_bias_array',
            'fann_get_bit_fail',
            'fann_get_bit_fail_limit',
            'fann_get_cascade_activation_functions',
            'fann_get_cascade_activation_functions_count',
            'fann_get_cascade_activation_steepnesses',
            'fann_get_cascade_activation_steepnesses_count',
            'fann_get_cascade_candidate_change_fraction',
            'fann_get_cascade_candidate_limit',
            'fann_get_cascade_candidate_stagnation_epochs',
            'fann_get_cascade_max_cand_epochs',
            'fann_get_cascade_max_out_epochs',
            'fann_get_cascade_min_cand_epochs',
            'fann_get_cascade_min_out_epochs',
            'fann_get_cascade_num_candidate_groups',
            'fann_get_cascade_num_candidates',
            'fann_get_cascade_output_change_fraction',
            'fann_get_cascade_output_stagnation_epochs',
            'fann_get_cascade_weight_multiplier',
            'fann_get_connection_array',
            'fann_get_connection_rate',
            'fann_get_errno',
            'fann_get_errstr',
            'fann_get_layer_array',
            'fann_get_learning_momentum',
            'fann_get_learning_rate',
            'fann_get_network_type',
            'fann_get_num_input',
            'fann_get_num_layers',
            'fann_get_num_output',
            'fann_get_quickprop_decay',
            'fann_get_quickprop_mu',
            'fann_get_rprop_decrease_factor',
            'fann_get_rprop_delta_max',
            'fann_get_rprop_delta_min',
            'fann_get_rprop_delta_zero',
            'fann_get_rprop_increase_factor',
            'fann_get_sarprop_step_error_shift',
            'fann_get_sarprop_step_error_threshold_factor',
            'fann_get_sarprop_temperature',
            'fann_get_sarprop_weight_decay_shift',
            'fann_get_total_connections',
            'fann_get_total_neurons',
            'fann_get_train_error_function',
            'fann_get_train_stop_function',
            'fann_get_training_algorithm',
            'fann_init_weights',
            'fann_length_train_data',
            'fann_merge_train_data',
            'fann_num_input_train_data',
            'fann_num_output_train_data',
            'fann_randomize_weights',
            'fann_read_train_from_file',
            'fann_reset_errno',
            'fann_reset_errstr',
            'fann_run',
            'fann_save',
            'fann_save_train',
            'fann_scale_input',
            'fann_scale_input_train_data',
            'fann_scale_output',
            'fann_scale_output_train_data',
            'fann_scale_train',
            'fann_scale_train_data',
            'fann_set_activation_function',
            'fann_set_activation_function_hidden',
            'fann_set_activation_function_layer',
            'fann_set_activation_function_output',
            'fann_set_activation_steepness',
            'fann_set_activation_steepness_hidden',
            'fann_set_activation_steepness_layer',
            'fann_set_activation_steepness_output',
            'fann_set_bit_fail_limit',
            'fann_set_callback',
            'fann_set_cascade_activation_functions',
            'fann_set_cascade_activation_steepnesses',
            'fann_set_cascade_candidate_change_fraction',
            'fann_set_cascade_candidate_limit',
            'fann_set_cascade_candidate_stagnation_epochs',
            'fann_set_cascade_max_cand_epochs',
            'fann_set_cascade_max_out_epochs',
            'fann_set_cascade_min_cand_epochs',
            'fann_set_cascade_min_out_epochs',
            'fann_set_cascade_num_candidate_groups',
            'fann_set_cascade_output_change_fraction',
            'fann_set_cascade_output_stagnation_epochs',
            'fann_set_cascade_weight_multiplier',
            'fann_set_error_log',
            'fann_set_input_scaling_params',
            'fann_set_learning_momentum',
            'fann_set_learning_rate',
            'fann_set_output_scaling_params',
            'fann_set_quickprop_decay',
            'fann_set_quickprop_mu',
            'fann_set_rprop_decrease_factor',
            'fann_set_rprop_delta_max',
            'fann_set_rprop_delta_min',
            'fann_set_rprop_delta_zero',
            'fann_set_rprop_increase_factor',
            'fann_set_sarprop_step_error_shift',
            'fann_set_sarprop_step_error_threshold_factor',
            'fann_set_sarprop_temperature',
            'fann_set_sarprop_weight_decay_shift',
            'fann_set_scaling_params',
            'fann_set_train_error_function',
            'fann_set_train_stop_function',
            'fann_set_training_algorithm',
            'fann_set_weight',
            'fann_set_weight_array',
            'fann_shuffle_train_data',
            'fann_subset_train_data',
            'fann_test',
            'fann_test_data',
            'fann_train',
            'fann_train_epoch',
            'fann_train_on_data',
            'fann_train_on_file',
            'fbsql_affected_rows',
            'fbsql_autocommit',
            'fbsql_blob_size',
            'fbsql_change_user',
            'fbsql_clob_size',
            'fbsql_close',
            'fbsql_commit',
            'fbsql_connect',
            'fbsql_create_blob',
            'fbsql_create_clob',
            'fbsql_create_db',
            'fbsql_data_seek',
            'fbsql_database',
            'fbsql_database_password',
            'fbsql_db_query',
            'fbsql_db_status',
            'fbsql_drop_db',
            'fbsql_errno',
            'fbsql_error',
            'fbsql_fetch_array',
            'fbsql_fetch_assoc',
            'fbsql_fetch_field',
            'fbsql_fetch_lengths',
            'fbsql_fetch_object',
            'fbsql_fetch_row',
            'fbsql_field_flags',
            'fbsql_field_len',
            'fbsql_field_name',
            'fbsql_field_seek',
            'fbsql_field_table',
            'fbsql_field_type',
            'fbsql_free_result',
            'fbsql_get_autostart_info',
            'fbsql_hostname',
            'fbsql_insert_id',
            'fbsql_list_dbs',
            'fbsql_list_fields',
            'fbsql_list_tables',
            'fbsql_next_result',
            'fbsql_num_fields',
            'fbsql_num_rows',
            'fbsql_password',
            'fbsql_pconnect',
            'fbsql_query',
            'fbsql_read_blob',
            'fbsql_read_clob',
            'fbsql_result',
            'fbsql_rollback',
            'fbsql_rows_fetched',
            'fbsql_select_db',
            'fbsql_set_characterset',
            'fbsql_set_lob_mode',
            'fbsql_set_password',
            'fbsql_set_transaction',
            'fbsql_start_db',
            'fbsql_stop_db',
            'fbsql_table_name',
            'fbsql_username',
            'fclose',
            'fdf_add_doc_javascript',
            'fdf_add_template',
            'fdf_close',
            'fdf_create',
            'fdf_enum_values',
            'fdf_get_ap',
            'fdf_get_attachment',
            'fdf_get_encoding',
            'fdf_get_file',
            'fdf_get_flags',
            'fdf_get_opt',
            'fdf_get_status',
            'fdf_get_value',
            'fdf_get_version',
            'fdf_next_field_name',
            'fdf_open',
            'fdf_open_string',
            'fdf_remove_item',
            'fdf_save',
            'fdf_save_string',
            'fdf_set_ap',
            'fdf_set_encoding',
            'fdf_set_file',
            'fdf_set_flags',
            'fdf_set_javascript_action',
            'fdf_set_on_import_javascript',
            'fdf_set_opt',
            'fdf_set_status',
            'fdf_set_submit_form_action',
            'fdf_set_target_frame',
            'fdf_set_value',
            'fdf_set_version',
            'feof',
            'fflush',
            'ffmpeg_frame::__construct',
            'ffmpeg_frame::toGDImage',
            'fgetc',
            'fgetcsv',
            'fgets',
            'fgetss',
            'file',
            'file_get_contents',
            'file_put_contents',
            'finfo::buffer',
            'finfo::file',
            'finfo_buffer',
            'finfo_close',
            'finfo_file',
            'finfo_open',
            'finfo_set_flags',
            'flock',
            'fopen',
            'fpassthru',
            'fprintf',
            'fputcsv',
            'fputs',
            'fread',
            'fscanf',
            'fseek',
            'fstat',
            'ftell',
            'ftp_alloc',
            'ftp_append',
            'ftp_cdup',
            'ftp_chdir',
            'ftp_chmod',
            'ftp_close',
            'ftp_delete',
            'ftp_exec',
            'ftp_fget',
            'ftp_fput',
            'ftp_get',
            'ftp_get_option',
            'ftp_login',
            'ftp_mdtm',
            'ftp_mkdir',
            'ftp_mlsd',
            'ftp_nb_continue',
            'ftp_nb_fget',
            'ftp_nb_fput',
            'ftp_nb_get',
            'ftp_nb_put',
            'ftp_nlist',
            'ftp_pasv',
            'ftp_put',
            'ftp_pwd',
            'ftp_quit',
            'ftp_raw',
            'ftp_rawlist',
            'ftp_rename',
            'ftp_rmdir',
            'ftp_set_option',
            'ftp_site',
            'ftp_size',
            'ftp_systype',
            'ftruncate',
            'fwrite',
            'get_resource_type',
            'gmp_div',
            'gnupg::init',
            'gnupg_adddecryptkey',
            'gnupg_addencryptkey',
            'gnupg_addsignkey',
            'gnupg_cleardecryptkeys',
            'gnupg_clearencryptkeys',
            'gnupg_clearsignkeys',
            'gnupg_decrypt',
            'gnupg_decryptverify',
            'gnupg_encrypt',
            'gnupg_encryptsign',
            'gnupg_export',
            'gnupg_geterror',
            'gnupg_getprotocol',
            'gnupg_import',
            'gnupg_init',
            'gnupg_keyinfo',
            'gnupg_setarmor',
            'gnupg_seterrormode',
            'gnupg_setsignmode',
            'gnupg_sign',
            'gnupg_verify',
            'gupnp_context_get_host_ip',
            'gupnp_context_get_port',
            'gupnp_context_get_subscription_timeout',
            'gupnp_context_host_path',
            'gupnp_context_new',
            'gupnp_context_set_subscription_timeout',
            'gupnp_context_timeout_add',
            'gupnp_context_unhost_path',
            'gupnp_control_point_browse_start',
            'gupnp_control_point_browse_stop',
            'gupnp_control_point_callback_set',
            'gupnp_control_point_new',
            'gupnp_device_action_callback_set',
            'gupnp_device_info_get',
            'gupnp_device_info_get_service',
            'gupnp_root_device_get_available',
            'gupnp_root_device_get_relative_location',
            'gupnp_root_device_new',
            'gupnp_root_device_set_available',
            'gupnp_root_device_start',
            'gupnp_root_device_stop',
            'gupnp_service_action_get',
            'gupnp_service_action_return',
            'gupnp_service_action_return_error',
            'gupnp_service_action_set',
            'gupnp_service_freeze_notify',
            'gupnp_service_info_get',
            'gupnp_service_info_get_introspection',
            'gupnp_service_introspection_get_state_variable',
            'gupnp_service_notify',
            'gupnp_service_proxy_action_get',
            'gupnp_service_proxy_action_set',
            'gupnp_service_proxy_add_notify',
            'gupnp_service_proxy_callback_set',
            'gupnp_service_proxy_get_subscribed',
            'gupnp_service_proxy_remove_notify',
            'gupnp_service_proxy_send_action',
            'gupnp_service_proxy_set_subscribed',
            'gupnp_service_thaw_notify',
            'gzclose',
            'gzeof',
            'gzgetc',
            'gzgets',
            'gzgetss',
            'gzpassthru',
            'gzputs',
            'gzread',
            'gzrewind',
            'gzseek',
            'gztell',
            'gzwrite',
            'hash_update_stream',
            'http\Env\Response::send',
            'http_get_request_body_stream',
            'ibase_add_user',
            'ibase_affected_rows',
            'ibase_backup',
            'ibase_blob_add',
            'ibase_blob_cancel',
            'ibase_blob_close',
            'ibase_blob_create',
            'ibase_blob_get',
            'ibase_blob_open',
            'ibase_close',
            'ibase_commit',
            'ibase_commit_ret',
            'ibase_connect',
            'ibase_db_info',
            'ibase_delete_user',
            'ibase_drop_db',
            'ibase_execute',
            'ibase_fetch_assoc',
            'ibase_fetch_object',
            'ibase_fetch_row',
            'ibase_field_info',
            'ibase_free_event_handler',
            'ibase_free_query',
            'ibase_free_result',
            'ibase_gen_id',
            'ibase_maintain_db',
            'ibase_modify_user',
            'ibase_name_result',
            'ibase_num_fields',
            'ibase_num_params',
            'ibase_param_info',
            'ibase_pconnect',
            'ibase_prepare',
            'ibase_query',
            'ibase_restore',
            'ibase_rollback',
            'ibase_rollback_ret',
            'ibase_server_info',
            'ibase_service_attach',
            'ibase_service_detach',
            'ibase_set_event_handler',
            'ibase_trans',
            'ifx_affected_rows',
            'ifx_close',
            'ifx_connect',
            'ifx_do',
            'ifx_error',
            'ifx_fetch_row',
            'ifx_fieldproperties',
            'ifx_fieldtypes',
            'ifx_free_result',
            'ifx_getsqlca',
            'ifx_htmltbl_result',
            'ifx_num_fields',
            'ifx_num_rows',
            'ifx_pconnect',
            'ifx_prepare',
            'ifx_query',
            'image2wbmp',
            'imageaffine',
            'imagealphablending',
            'imageantialias',
            'imagearc',
            'imagebmp',
            'imagechar',
            'imagecharup',
            'imagecolorallocate',
            'imagecolorallocatealpha',
            'imagecolorat',
            'imagecolorclosest',
            'imagecolorclosestalpha',
            'imagecolorclosesthwb',
            'imagecolordeallocate',
            'imagecolorexact',
            'imagecolorexactalpha',
            'imagecolormatch',
            'imagecolorresolve',
            'imagecolorresolvealpha',
            'imagecolorset',
            'imagecolorsforindex',
            'imagecolorstotal',
            'imagecolortransparent',
            'imageconvolution',
            'imagecopy',
            'imagecopymerge',
            'imagecopymergegray',
            'imagecopyresampled',
            'imagecopyresized',
            'imagecrop',
            'imagecropauto',
            'imagedashedline',
            'imagedestroy',
            'imageellipse',
            'imagefill',
            'imagefilledarc',
            'imagefilledellipse',
            'imagefilledpolygon',
            'imagefilledrectangle',
            'imagefilltoborder',
            'imagefilter',
            'imageflip',
            'imagefttext',
            'imagegammacorrect',
            'imagegd',
            'imagegd2',
            'imagegetclip',
            'imagegif',
            'imagegrabscreen',
            'imagegrabwindow',
            'imageinterlace',
            'imageistruecolor',
            'imagejpeg',
            'imagelayereffect',
            'imageline',
            'imageopenpolygon',
            'imagepalettecopy',
            'imagepalettetotruecolor',
            'imagepng',
            'imagepolygon',
            'imagepsencodefont',
            'imagepsextendfont',
            'imagepsfreefont',
            'imagepsloadfont',
            'imagepsslantfont',
            'imagepstext',
            'imagerectangle',
            'imageresolution',
            'imagerotate',
            'imagesavealpha',
            'imagescale',
            'imagesetbrush',
            'imagesetclip',
            'imagesetinterpolation',
            'imagesetpixel',
            'imagesetstyle',
            'imagesetthickness',
            'imagesettile',
            'imagestring',
            'imagestringup',
            'imagesx',
            'imagesy',
            'imagetruecolortopalette',
            'imagettftext',
            'imagewbmp',
            'imagewebp',
            'imagexbm',
            'imap_append',
            'imap_body',
            'imap_bodystruct',
            'imap_check',
            'imap_clearflag_full',
            'imap_close',
            'imap_create',
            'imap_createmailbox',
            'imap_delete',
            'imap_deletemailbox',
            'imap_expunge',
            'imap_fetch_overview',
            'imap_fetchbody',
            'imap_fetchheader',
            'imap_fetchmime',
            'imap_fetchstructure',
            'imap_fetchtext',
            'imap_gc',
            'imap_get_quota',
            'imap_get_quotaroot',
            'imap_getacl',
            'imap_getmailboxes',
            'imap_getsubscribed',
            'imap_header',
            'imap_headerinfo',
            'imap_headers',
            'imap_list',
            'imap_listmailbox',
            'imap_listscan',
            'imap_listsubscribed',
            'imap_lsub',
            'imap_mail_copy',
            'imap_mail_move',
            'imap_mailboxmsginfo',
            'imap_msgno',
            'imap_num_msg',
            'imap_num_recent',
            'imap_ping',
            'imap_rename',
            'imap_renamemailbox',
            'imap_reopen',
            'imap_savebody',
            'imap_scan',
            'imap_scanmailbox',
            'imap_search',
            'imap_set_quota',
            'imap_setacl',
            'imap_setflag_full',
            'imap_sort',
            'imap_status',
            'imap_subscribe',
            'imap_thread',
            'imap_uid',
            'imap_undelete',
            'imap_unsubscribe',
            'inflate_add',
            'inflate_get_read_len',
            'inflate_get_status',
            'ingres_autocommit',
            'ingres_autocommit_state',
            'ingres_charset',
            'ingres_close',
            'ingres_commit',
            'ingres_connect',
            'ingres_cursor',
            'ingres_errno',
            'ingres_error',
            'ingres_errsqlstate',
            'ingres_escape_string',
            'ingres_execute',
            'ingres_fetch_array',
            'ingres_fetch_assoc',
            'ingres_fetch_object',
            'ingres_fetch_proc_return',
            'ingres_fetch_row',
            'ingres_field_length',
            'ingres_field_name',
            'ingres_field_nullable',
            'ingres_field_precision',
            'ingres_field_scale',
            'ingres_field_type',
            'ingres_free_result',
            'ingres_next_error',
            'ingres_num_fields',
            'ingres_num_rows',
            'ingres_pconnect',
            'ingres_prepare',
            'ingres_query',
            'ingres_result_seek',
            'ingres_rollback',
            'ingres_set_environment',
            'ingres_unbuffered_query',
            'inotify_add_watch',
            'inotify_init',
            'inotify_queue_len',
            'inotify_read',
            'inotify_rm_watch',
            'kadm5_chpass_principal',
            'kadm5_create_principal',
            'kadm5_delete_principal',
            'kadm5_destroy',
            'kadm5_flush',
            'kadm5_get_policies',
            'kadm5_get_principal',
            'kadm5_get_principals',
            'kadm5_init_with_password',
            'kadm5_modify_principal',
            'ldap_add',
            'ldap_bind',
            'ldap_close',
            'ldap_compare',
            'ldap_control_paged_result',
            'ldap_control_paged_result_response',
            'ldap_count_entries',
            'ldap_delete',
            'ldap_errno',
            'ldap_error',
            'ldap_exop',
            'ldap_exop_passwd',
            'ldap_exop_refresh',
            'ldap_exop_whoami',
            'ldap_first_attribute',
            'ldap_first_entry',
            'ldap_first_reference',
            'ldap_free_result',
            'ldap_get_attributes',
            'ldap_get_dn',
            'ldap_get_entries',
            'ldap_get_option',
            'ldap_get_values',
            'ldap_get_values_len',
            'ldap_mod_add',
            'ldap_mod_del',
            'ldap_mod_replace',
            'ldap_modify',
            'ldap_modify_batch',
            'ldap_next_attribute',
            'ldap_next_entry',
            'ldap_next_reference',
            'ldap_parse_exop',
            'ldap_parse_reference',
            'ldap_parse_result',
            'ldap_rename',
            'ldap_sasl_bind',
            'ldap_set_option',
            'ldap_set_rebind_proc',
            'ldap_sort',
            'ldap_start_tls',
            'ldap_unbind',
            'libxml_set_streams_context',
            'm_checkstatus',
            'm_completeauthorizations',
            'm_connect',
            'm_connectionerror',
            'm_deletetrans',
            'm_destroyconn',
            'm_getcell',
            'm_getcellbynum',
            'm_getcommadelimited',
            'm_getheader',
            'm_initconn',
            'm_iscommadelimited',
            'm_maxconntimeout',
            'm_monitor',
            'm_numcolumns',
            'm_numrows',
            'm_parsecommadelimited',
            'm_responsekeys',
            'm_responseparam',
            'm_returnstatus',
            'm_setblocking',
            'm_setdropfile',
            'm_setip',
            'm_setssl',
            'm_setssl_cafile',
            'm_setssl_files',
            'm_settimeout',
            'm_transactionssent',
            'm_transinqueue',
            'm_transkeyval',
            'm_transnew',
            'm_transsend',
            'm_validateidentifier',
            'm_verifyconnection',
            'm_verifysslcert',
            'mailparse_determine_best_xfer_encoding',
            'mailparse_msg_create',
            'mailparse_msg_extract_part',
            'mailparse_msg_extract_part_file',
            'mailparse_msg_extract_whole_part_file',
            'mailparse_msg_free',
            'mailparse_msg_get_part',
            'mailparse_msg_get_part_data',
            'mailparse_msg_get_structure',
            'mailparse_msg_parse',
            'mailparse_msg_parse_file',
            'mailparse_stream_encode',
            'mailparse_uudecode_all',
            'maxdb::use_result',
            'maxdb_affected_rows',
            'maxdb_connect',
            'maxdb_disable_rpl_parse',
            'maxdb_dump_debug_info',
            'maxdb_embedded_connect',
            'maxdb_enable_reads_from_master',
            'maxdb_enable_rpl_parse',
            'maxdb_errno',
            'maxdb_error',
            'maxdb_fetch_lengths',
            'maxdb_field_tell',
            'maxdb_get_host_info',
            'maxdb_get_proto_info',
            'maxdb_get_server_info',
            'maxdb_get_server_version',
            'maxdb_info',
            'maxdb_init',
            'maxdb_insert_id',
            'maxdb_master_query',
            'maxdb_more_results',
            'maxdb_next_result',
            'maxdb_num_fields',
            'maxdb_num_rows',
            'maxdb_rpl_parse_enabled',
            'maxdb_rpl_probe',
            'maxdb_select_db',
            'maxdb_sqlstate',
            'maxdb_stmt::result_metadata',
            'maxdb_stmt_affected_rows',
            'maxdb_stmt_errno',
            'maxdb_stmt_error',
            'maxdb_stmt_num_rows',
            'maxdb_stmt_param_count',
            'maxdb_stmt_result_metadata',
            'maxdb_stmt_sqlstate',
            'maxdb_thread_id',
            'maxdb_use_result',
            'maxdb_warning_count',
            'mcrypt_enc_get_algorithms_name',
            'mcrypt_enc_get_block_size',
            'mcrypt_enc_get_iv_size',
            'mcrypt_enc_get_key_size',
            'mcrypt_enc_get_modes_name',
            'mcrypt_enc_get_supported_key_sizes',
            'mcrypt_enc_is_block_algorithm',
            'mcrypt_enc_is_block_algorithm_mode',
            'mcrypt_enc_is_block_mode',
            'mcrypt_enc_self_test',
            'mcrypt_generic',
            'mcrypt_generic_deinit',
            'mcrypt_generic_end',
            'mcrypt_generic_init',
            'mcrypt_module_close',
            'mcrypt_module_open',
            'mdecrypt_generic',
            'mkdir',
            'mqseries_back',
            'mqseries_begin',
            'mqseries_close',
            'mqseries_cmit',
            'mqseries_conn',
            'mqseries_connx',
            'mqseries_disc',
            'mqseries_get',
            'mqseries_inq',
            'mqseries_open',
            'mqseries_put',
            'mqseries_put1',
            'mqseries_set',
            'msg_get_queue',
            'msg_receive',
            'msg_remove_queue',
            'msg_send',
            'msg_set_queue',
            'msg_stat_queue',
            'msql_affected_rows',
            'msql_close',
            'msql_connect',
            'msql_create_db',
            'msql_data_seek',
            'msql_db_query',
            'msql_drop_db',
            'msql_fetch_array',
            'msql_fetch_field',
            'msql_fetch_object',
            'msql_fetch_row',
            'msql_field_flags',
            'msql_field_len',
            'msql_field_name',
            'msql_field_seek',
            'msql_field_table',
            'msql_field_type',
            'msql_free_result',
            'msql_list_dbs',
            'msql_list_fields',
            'msql_list_tables',
            'msql_num_fields',
            'msql_num_rows',
            'msql_pconnect',
            'msql_query',
            'msql_result',
            'msql_select_db',
            'mssql_bind',
            'mssql_close',
            'mssql_connect',
            'mssql_data_seek',
            'mssql_execute',
            'mssql_fetch_array',
            'mssql_fetch_assoc',
            'mssql_fetch_batch',
            'mssql_fetch_field',
            'mssql_fetch_object',
            'mssql_fetch_row',
            'mssql_field_length',
            'mssql_field_name',
            'mssql_field_seek',
            'mssql_field_type',
            'mssql_free_result',
            'mssql_free_statement',
            'mssql_init',
            'mssql_next_result',
            'mssql_num_fields',
            'mssql_num_rows',
            'mssql_pconnect',
            'mssql_query',
            'mssql_result',
            'mssql_rows_affected',
            'mssql_select_db',
            'mysql_affected_rows',
            'mysql_client_encoding',
            'mysql_close',
            'mysql_connect',
            'mysql_create_db',
            'mysql_data_seek',
            'mysql_db_name',
            'mysql_db_query',
            'mysql_drop_db',
            'mysql_errno',
            'mysql_error',
            'mysql_fetch_array',
            'mysql_fetch_assoc',
            'mysql_fetch_field',
            'mysql_fetch_lengths',
            'mysql_fetch_object',
            'mysql_fetch_row',
            'mysql_field_flags',
            'mysql_field_len',
            'mysql_field_name',
            'mysql_field_seek',
            'mysql_field_table',
            'mysql_field_type',
            'mysql_free_result',
            'mysql_get_host_info',
            'mysql_get_proto_info',
            'mysql_get_server_info',
            'mysql_info',
            'mysql_insert_id',
            'mysql_list_dbs',
            'mysql_list_fields',
            'mysql_list_processes',
            'mysql_list_tables',
            'mysql_num_fields',
            'mysql_num_rows',
            'mysql_pconnect',
            'mysql_ping',
            'mysql_query',
            'mysql_real_escape_string',
            'mysql_result',
            'mysql_select_db',
            'mysql_set_charset',
            'mysql_stat',
            'mysql_tablename',
            'mysql_thread_id',
            'mysql_unbuffered_query',
            'mysqlnd_uh_convert_to_mysqlnd',
            'ncurses_bottom_panel',
            'ncurses_del_panel',
            'ncurses_delwin',
            'ncurses_getmaxyx',
            'ncurses_getyx',
            'ncurses_hide_panel',
            'ncurses_keypad',
            'ncurses_meta',
            'ncurses_move_panel',
            'ncurses_mvwaddstr',
            'ncurses_new_panel',
            'ncurses_newpad',
            'ncurses_newwin',
            'ncurses_panel_above',
            'ncurses_panel_below',
            'ncurses_panel_window',
            'ncurses_pnoutrefresh',
            'ncurses_prefresh',
            'ncurses_replace_panel',
            'ncurses_show_panel',
            'ncurses_top_panel',
            'ncurses_waddch',
            'ncurses_waddstr',
            'ncurses_wattroff',
            'ncurses_wattron',
            'ncurses_wattrset',
            'ncurses_wborder',
            'ncurses_wclear',
            'ncurses_wcolor_set',
            'ncurses_werase',
            'ncurses_wgetch',
            'ncurses_whline',
            'ncurses_wmouse_trafo',
            'ncurses_wmove',
            'ncurses_wnoutrefresh',
            'ncurses_wrefresh',
            'ncurses_wstandend',
            'ncurses_wstandout',
            'ncurses_wvline',
            'newt_button',
            'newt_button_bar',
            'newt_checkbox',
            'newt_checkbox_get_value',
            'newt_checkbox_set_flags',
            'newt_checkbox_set_value',
            'newt_checkbox_tree',
            'newt_checkbox_tree_add_item',
            'newt_checkbox_tree_find_item',
            'newt_checkbox_tree_get_current',
            'newt_checkbox_tree_get_entry_value',
            'newt_checkbox_tree_get_multi_selection',
            'newt_checkbox_tree_get_selection',
            'newt_checkbox_tree_multi',
            'newt_checkbox_tree_set_current',
            'newt_checkbox_tree_set_entry',
            'newt_checkbox_tree_set_entry_value',
            'newt_checkbox_tree_set_width',
            'newt_compact_button',
            'newt_component_add_callback',
            'newt_component_takes_focus',
            'newt_create_grid',
            'newt_draw_form',
            'newt_entry',
            'newt_entry_get_value',
            'newt_entry_set',
            'newt_entry_set_filter',
            'newt_entry_set_flags',
            'newt_form',
            'newt_form_add_component',
            'newt_form_add_components',
            'newt_form_add_hot_key',
            'newt_form_destroy',
            'newt_form_get_current',
            'newt_form_run',
            'newt_form_set_background',
            'newt_form_set_height',
            'newt_form_set_size',
            'newt_form_set_timer',
            'newt_form_set_width',
            'newt_form_watch_fd',
            'newt_grid_add_components_to_form',
            'newt_grid_basic_window',
            'newt_grid_free',
            'newt_grid_get_size',
            'newt_grid_h_close_stacked',
            'newt_grid_h_stacked',
            'newt_grid_place',
            'newt_grid_set_field',
            'newt_grid_simple_window',
            'newt_grid_v_close_stacked',
            'newt_grid_v_stacked',
            'newt_grid_wrapped_window',
            'newt_grid_wrapped_window_at',
            'newt_label',
            'newt_label_set_text',
            'newt_listbox',
            'newt_listbox_append_entry',
            'newt_listbox_clear',
            'newt_listbox_clear_selection',
            'newt_listbox_delete_entry',
            'newt_listbox_get_current',
            'newt_listbox_get_selection',
            'newt_listbox_insert_entry',
            'newt_listbox_item_count',
            'newt_listbox_select_item',
            'newt_listbox_set_current',
            'newt_listbox_set_current_by_key',
            'newt_listbox_set_data',
            'newt_listbox_set_entry',
            'newt_listbox_set_width',
            'newt_listitem',
            'newt_listitem_get_data',
            'newt_listitem_set',
            'newt_radio_get_current',
            'newt_radiobutton',
            'newt_run_form',
            'newt_scale',
            'newt_scale_set',
            'newt_scrollbar_set',
            'newt_textbox',
            'newt_textbox_get_num_lines',
            'newt_textbox_reflowed',
            'newt_textbox_set_height',
            'newt_textbox_set_text',
            'newt_vertical_scrollbar',
            'oci_bind_array_by_name',
            'oci_bind_by_name',
            'oci_cancel',
            'oci_close',
            'oci_commit',
            'oci_connect',
            'oci_define_by_name',
            'oci_error',
            'oci_execute',
            'oci_fetch',
            'oci_fetch_all',
            'oci_fetch_array',
            'oci_fetch_assoc',
            'oci_fetch_object',
            'oci_fetch_row',
            'oci_field_is_null',
            'oci_field_name',
            'oci_field_precision',
            'oci_field_scale',
            'oci_field_size',
            'oci_field_type',
            'oci_field_type_raw',
            'oci_free_cursor',
            'oci_free_statement',
            'oci_get_implicit_resultset',
            'oci_new_collection',
            'oci_new_connect',
            'oci_new_cursor',
            'oci_new_descriptor',
            'oci_num_fields',
            'oci_num_rows',
            'oci_parse',
            'oci_pconnect',
            'oci_register_taf_callback',
            'oci_result',
            'oci_rollback',
            'oci_server_version',
            'oci_set_action',
            'oci_set_client_identifier',
            'oci_set_client_info',
            'oci_set_module_name',
            'oci_set_prefetch',
            'oci_statement_type',
            'oci_unregister_taf_callback',
            'odbc_autocommit',
            'odbc_close',
            'odbc_columnprivileges',
            'odbc_columns',
            'odbc_commit',
            'odbc_connect',
            'odbc_cursor',
            'odbc_data_source',
            'odbc_do',
            'odbc_error',
            'odbc_errormsg',
            'odbc_exec',
            'odbc_execute',
            'odbc_fetch_array',
            'odbc_fetch_into',
            'odbc_fetch_row',
            'odbc_field_len',
            'odbc_field_name',
            'odbc_field_num',
            'odbc_field_precision',
            'odbc_field_scale',
            'odbc_field_type',
            'odbc_foreignkeys',
            'odbc_free_result',
            'odbc_gettypeinfo',
            'odbc_next_result',
            'odbc_num_fields',
            'odbc_num_rows',
            'odbc_pconnect',
            'odbc_prepare',
            'odbc_primarykeys',
            'odbc_procedurecolumns',
            'odbc_procedures',
            'odbc_result',
            'odbc_result_all',
            'odbc_rollback',
            'odbc_setoption',
            'odbc_specialcolumns',
            'odbc_statistics',
            'odbc_tableprivileges',
            'odbc_tables',
            'openal_buffer_create',
            'openal_buffer_data',
            'openal_buffer_destroy',
            'openal_buffer_get',
            'openal_buffer_loadwav',
            'openal_context_create',
            'openal_context_current',
            'openal_context_destroy',
            'openal_context_process',
            'openal_context_suspend',
            'openal_device_close',
            'openal_device_open',
            'openal_source_create',
            'openal_source_destroy',
            'openal_source_get',
            'openal_source_pause',
            'openal_source_play',
            'openal_source_rewind',
            'openal_source_set',
            'openal_source_stop',
            'openal_stream',
            'opendir',
            'openssl_csr_new',
            'openssl_dh_compute_key',
            'openssl_free_key',
            'openssl_pkey_export',
            'openssl_pkey_free',
            'openssl_pkey_get_details',
            'openssl_spki_new',
            'openssl_x509_free',
            'pclose',
            'pfsockopen',
            'pg_affected_rows',
            'pg_cancel_query',
            'pg_client_encoding',
            'pg_close',
            'pg_connect_poll',
            'pg_connection_busy',
            'pg_connection_reset',
            'pg_connection_status',
            'pg_consume_input',
            'pg_convert',
            'pg_copy_from',
            'pg_copy_to',
            'pg_dbname',
            'pg_delete',
            'pg_end_copy',
            'pg_escape_bytea',
            'pg_escape_identifier',
            'pg_escape_literal',
            'pg_escape_string',
            'pg_execute',
            'pg_fetch_all',
            'pg_fetch_all_columns',
            'pg_fetch_array',
            'pg_fetch_assoc',
            'pg_fetch_row',
            'pg_field_name',
            'pg_field_num',
            'pg_field_size',
            'pg_field_table',
            'pg_field_type',
            'pg_field_type_oid',
            'pg_flush',
            'pg_free_result',
            'pg_get_notify',
            'pg_get_pid',
            'pg_get_result',
            'pg_host',
            'pg_insert',
            'pg_last_error',
            'pg_last_notice',
            'pg_last_oid',
            'pg_lo_close',
            'pg_lo_create',
            'pg_lo_export',
            'pg_lo_import',
            'pg_lo_open',
            'pg_lo_read',
            'pg_lo_read_all',
            'pg_lo_seek',
            'pg_lo_tell',
            'pg_lo_truncate',
            'pg_lo_unlink',
            'pg_lo_write',
            'pg_meta_data',
            'pg_num_fields',
            'pg_num_rows',
            'pg_options',
            'pg_parameter_status',
            'pg_ping',
            'pg_port',
            'pg_prepare',
            'pg_put_line',
            'pg_query',
            'pg_query_params',
            'pg_result_error',
            'pg_result_error_field',
            'pg_result_seek',
            'pg_result_status',
            'pg_select',
            'pg_send_execute',
            'pg_send_prepare',
            'pg_send_query',
            'pg_send_query_params',
            'pg_set_client_encoding',
            'pg_set_error_verbosity',
            'pg_socket',
            'pg_trace',
            'pg_transaction_status',
            'pg_tty',
            'pg_untrace',
            'pg_update',
            'pg_version',
            'php_user_filter::filter',
            'proc_close',
            'proc_get_status',
            'proc_terminate',
            'ps_add_bookmark',
            'ps_add_launchlink',
            'ps_add_locallink',
            'ps_add_note',
            'ps_add_pdflink',
            'ps_add_weblink',
            'ps_arc',
            'ps_arcn',
            'ps_begin_page',
            'ps_begin_pattern',
            'ps_begin_template',
            'ps_circle',
            'ps_clip',
            'ps_close',
            'ps_close_image',
            'ps_closepath',
            'ps_closepath_stroke',
            'ps_continue_text',
            'ps_curveto',
            'ps_delete',
            'ps_end_page',
            'ps_end_pattern',
            'ps_end_template',
            'ps_fill',
            'ps_fill_stroke',
            'ps_findfont',
            'ps_get_buffer',
            'ps_get_parameter',
            'ps_get_value',
            'ps_hyphenate',
            'ps_include_file',
            'ps_lineto',
            'ps_makespotcolor',
            'ps_moveto',
            'ps_new',
            'ps_open_file',
            'ps_open_image',
            'ps_open_image_file',
            'ps_open_memory_image',
            'ps_place_image',
            'ps_rect',
            'ps_restore',
            'ps_rotate',
            'ps_save',
            'ps_scale',
            'ps_set_border_color',
            'ps_set_border_dash',
            'ps_set_border_style',
            'ps_set_info',
            'ps_set_parameter',
            'ps_set_text_pos',
            'ps_set_value',
            'ps_setcolor',
            'ps_setdash',
            'ps_setflat',
            'ps_setfont',
            'ps_setgray',
            'ps_setlinecap',
            'ps_setlinejoin',
            'ps_setlinewidth',
            'ps_setmiterlimit',
            'ps_setoverprintmode',
            'ps_setpolydash',
            'ps_shading',
            'ps_shading_pattern',
            'ps_shfill',
            'ps_show',
            'ps_show2',
            'ps_show_boxed',
            'ps_show_xy',
            'ps_show_xy2',
            'ps_string_geometry',
            'ps_stringwidth',
            'ps_stroke',
            'ps_symbol',
            'ps_symbol_name',
            'ps_symbol_width',
            'ps_translate',
            'px_close',
            'px_create_fp',
            'px_date2string',
            'px_delete',
            'px_delete_record',
            'px_get_field',
            'px_get_info',
            'px_get_parameter',
            'px_get_record',
            'px_get_schema',
            'px_get_value',
            'px_insert_record',
            'px_new',
            'px_numfields',
            'px_numrecords',
            'px_open_fp',
            'px_put_record',
            'px_retrieve_record',
            'px_set_blob_file',
            'px_set_parameter',
            'px_set_tablename',
            'px_set_targetencoding',
            'px_set_value',
            'px_timestamp2string',
            'px_update_record',
            'radius_acct_open',
            'radius_add_server',
            'radius_auth_open',
            'radius_close',
            'radius_config',
            'radius_create_request',
            'radius_demangle',
            'radius_demangle_mppe_key',
            'radius_get_attr',
            'radius_put_addr',
            'radius_put_attr',
            'radius_put_int',
            'radius_put_string',
            'radius_put_vendor_addr',
            'radius_put_vendor_attr',
            'radius_put_vendor_int',
            'radius_put_vendor_string',
            'radius_request_authenticator',
            'radius_salt_encrypt_attr',
            'radius_send_request',
            'radius_server_secret',
            'radius_strerror',
            'readdir',
            'readfile',
            'recode_file',
            'rename',
            'rewind',
            'rewinddir',
            'rmdir',
            'rpm_close',
            'rpm_get_tag',
            'rpm_open',
            'sapi_windows_vt100_support',
            'scandir',
            'sem_acquire',
            'sem_get',
            'sem_release',
            'sem_remove',
            'set_file_buffer',
            'shm_attach',
            'shm_detach',
            'shm_get_var',
            'shm_has_var',
            'shm_put_var',
            'shm_remove',
            'shm_remove_var',
            'shmop_close',
            'shmop_delete',
            'shmop_open',
            'shmop_read',
            'shmop_size',
            'shmop_write',
            'socket_accept',
            'socket_addrinfo_bind',
            'socket_addrinfo_connect',
            'socket_addrinfo_explain',
            'socket_bind',
            'socket_clear_error',
            'socket_close',
            'socket_connect',
            'socket_export_stream',
            'socket_get_option',
            'socket_get_status',
            'socket_getopt',
            'socket_getpeername',
            'socket_getsockname',
            'socket_import_stream',
            'socket_last_error',
            'socket_listen',
            'socket_read',
            'socket_recv',
            'socket_recvfrom',
            'socket_recvmsg',
            'socket_send',
            'socket_sendmsg',
            'socket_sendto',
            'socket_set_block',
            'socket_set_blocking',
            'socket_set_nonblock',
            'socket_set_option',
            'socket_set_timeout',
            'socket_shutdown',
            'socket_write',
            'sqlite_close',
            'sqlite_fetch_string',
            'sqlite_has_more',
            'sqlite_open',
            'sqlite_popen',
            'sqlsrv_begin_transaction',
            'sqlsrv_cancel',
            'sqlsrv_client_info',
            'sqlsrv_close',
            'sqlsrv_commit',
            'sqlsrv_connect',
            'sqlsrv_execute',
            'sqlsrv_fetch',
            'sqlsrv_fetch_array',
            'sqlsrv_fetch_object',
            'sqlsrv_field_metadata',
            'sqlsrv_free_stmt',
            'sqlsrv_get_field',
            'sqlsrv_has_rows',
            'sqlsrv_next_result',
            'sqlsrv_num_fields',
            'sqlsrv_num_rows',
            'sqlsrv_prepare',
            'sqlsrv_query',
            'sqlsrv_rollback',
            'sqlsrv_rows_affected',
            'sqlsrv_send_stream_data',
            'sqlsrv_server_info',
            'ssh2_auth_agent',
            'ssh2_auth_hostbased_file',
            'ssh2_auth_none',
            'ssh2_auth_password',
            'ssh2_auth_pubkey_file',
            'ssh2_disconnect',
            'ssh2_exec',
            'ssh2_fetch_stream',
            'ssh2_fingerprint',
            'ssh2_methods_negotiated',
            'ssh2_publickey_add',
            'ssh2_publickey_init',
            'ssh2_publickey_list',
            'ssh2_publickey_remove',
            'ssh2_scp_recv',
            'ssh2_scp_send',
            'ssh2_sftp',
            'ssh2_sftp_chmod',
            'ssh2_sftp_lstat',
            'ssh2_sftp_mkdir',
            'ssh2_sftp_readlink',
            'ssh2_sftp_realpath',
            'ssh2_sftp_rename',
            'ssh2_sftp_rmdir',
            'ssh2_sftp_stat',
            'ssh2_sftp_symlink',
            'ssh2_sftp_unlink',
            'ssh2_shell',
            'ssh2_tunnel',
            'stomp_connect',
            'streamWrapper::stream_cast',
            'stream_bucket_append',
            'stream_bucket_make_writeable',
            'stream_bucket_new',
            'stream_bucket_prepend',
            'stream_context_create',
            'stream_context_get_default',
            'stream_context_get_options',
            'stream_context_get_params',
            'stream_context_set_default',
            'stream_context_set_params',
            'stream_copy_to_stream',
            'stream_encoding',
            'stream_filter_append',
            'stream_filter_prepend',
            'stream_filter_remove',
            'stream_get_contents',
            'stream_get_line',
            'stream_get_meta_data',
            'stream_isatty',
            'stream_set_blocking',
            'stream_set_chunk_size',
            'stream_set_read_buffer',
            'stream_set_timeout',
            'stream_set_write_buffer',
            'stream_socket_accept',
            'stream_socket_client',
            'stream_socket_enable_crypto',
            'stream_socket_get_name',
            'stream_socket_recvfrom',
            'stream_socket_sendto',
            'stream_socket_server',
            'stream_socket_shutdown',
            'stream_supports_lock',
            'svn_fs_abort_txn',
            'svn_fs_apply_text',
            'svn_fs_begin_txn2',
            'svn_fs_change_node_prop',
            'svn_fs_check_path',
            'svn_fs_contents_changed',
            'svn_fs_copy',
            'svn_fs_delete',
            'svn_fs_dir_entries',
            'svn_fs_file_contents',
            'svn_fs_file_length',
            'svn_fs_is_dir',
            'svn_fs_is_file',
            'svn_fs_make_dir',
            'svn_fs_make_file',
            'svn_fs_node_created_rev',
            'svn_fs_node_prop',
            'svn_fs_props_changed',
            'svn_fs_revision_prop',
            'svn_fs_revision_root',
            'svn_fs_txn_root',
            'svn_fs_youngest_rev',
            'svn_repos_create',
            'svn_repos_fs',
            'svn_repos_fs_begin_txn_for_commit',
            'svn_repos_fs_commit_txn',
            'svn_repos_open',
            'sybase_affected_rows',
            'sybase_close',
            'sybase_connect',
            'sybase_data_seek',
            'sybase_fetch_array',
            'sybase_fetch_assoc',
            'sybase_fetch_field',
            'sybase_fetch_object',
            'sybase_fetch_row',
            'sybase_field_seek',
            'sybase_free_result',
            'sybase_num_fields',
            'sybase_num_rows',
            'sybase_pconnect',
            'sybase_query',
            'sybase_result',
            'sybase_select_db',
            'sybase_set_message_handler',
            'sybase_unbuffered_query',
            'tmpfile',
            'udm_add_search_limit',
            'udm_alloc_agent',
            'udm_alloc_agent_array',
            'udm_cat_list',
            'udm_cat_path',
            'udm_check_charset',
            'udm_clear_search_limits',
            'udm_crc32',
            'udm_errno',
            'udm_error',
            'udm_find',
            'udm_free_agent',
            'udm_free_res',
            'udm_get_doc_count',
            'udm_get_res_field',
            'udm_get_res_param',
            'udm_hash32',
            'udm_load_ispell_data',
            'udm_set_agent_param',
            'unlink',
            'vfprintf',
            'w32api_init_dtype',
            'wddx_add_vars',
            'wddx_packet_end',
            'wddx_packet_start',
            'xml_get_current_byte_index',
            'xml_get_current_column_number',
            'xml_get_current_line_number',
            'xml_get_error_code',
            'xml_parse',
            'xml_parse_into_struct',
            'xml_parser_create',
            'xml_parser_create_ns',
            'xml_parser_free',
            'xml_parser_get_option',
            'xml_parser_set_option',
            'xml_set_character_data_handler',
            'xml_set_default_handler',
            'xml_set_element_handler',
            'xml_set_end_namespace_decl_handler',
            'xml_set_external_entity_ref_handler',
            'xml_set_notation_decl_handler',
            'xml_set_object',
            'xml_set_processing_instruction_handler',
            'xml_set_start_namespace_decl_handler',
            'xml_set_unparsed_entity_decl_handler',
            'xmlrpc_server_add_introspection_data',
            'xmlrpc_server_call_method',
            'xmlrpc_server_create',
            'xmlrpc_server_destroy',
            'xmlrpc_server_register_introspection_callback',
            'xmlrpc_server_register_method',
            'xmlwriter_end_attribute',
            'xmlwriter_end_cdata',
            'xmlwriter_end_comment',
            'xmlwriter_end_document',
            'xmlwriter_end_dtd',
            'xmlwriter_end_dtd_attlist',
            'xmlwriter_end_dtd_element',
            'xmlwriter_end_dtd_entity',
            'xmlwriter_end_element',
            'xmlwriter_end_pi',
            'xmlwriter_flush',
            'xmlwriter_full_end_element',
            'xmlwriter_open_memory',
            'xmlwriter_open_uri',
            'xmlwriter_output_memory',
            'xmlwriter_set_indent',
            'xmlwriter_set_indent_string',
            'xmlwriter_start_attribute',
            'xmlwriter_start_attribute_ns',
            'xmlwriter_start_cdata',
            'xmlwriter_start_comment',
            'xmlwriter_start_document',
            'xmlwriter_start_dtd',
            'xmlwriter_start_dtd_attlist',
            'xmlwriter_start_dtd_element',
            'xmlwriter_start_dtd_entity',
            'xmlwriter_start_element',
            'xmlwriter_start_element_ns',
            'xmlwriter_start_pi',
            'xmlwriter_text',
            'xmlwriter_write_attribute',
            'xmlwriter_write_attribute_ns',
            'xmlwriter_write_cdata',
            'xmlwriter_write_comment',
            'xmlwriter_write_dtd',
            'xmlwriter_write_dtd_attlist',
            'xmlwriter_write_dtd_element',
            'xmlwriter_write_dtd_entity',
            'xmlwriter_write_element',
            'xmlwriter_write_element_ns',
            'xmlwriter_write_pi',
            'xmlwriter_write_raw',
            'xslt_create',
            'yaz_addinfo',
            'yaz_ccl_conf',
            'yaz_ccl_parse',
            'yaz_close',
            'yaz_database',
            'yaz_element',
            'yaz_errno',
            'yaz_error',
            'yaz_es',
            'yaz_es_result',
            'yaz_get_option',
            'yaz_hits',
            'yaz_itemorder',
            'yaz_present',
            'yaz_range',
            'yaz_record',
            'yaz_scan',
            'yaz_scan_result',
            'yaz_schema',
            'yaz_search',
            'yaz_sort',
            'yaz_syntax',
            'zip_close',
            'zip_entry_close',
            'zip_entry_compressedsize',
            'zip_entry_compressionmethod',
            'zip_entry_filesize',
            'zip_entry_name',
            'zip_entry_open',
            'zip_entry_read',
            'zip_open',
            'zip_read',
        ];
    }
}
