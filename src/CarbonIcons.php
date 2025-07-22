<?php

namespace Filafly\Icons\Carbon;

use Filafly\Icons\Carbon\Enums\Carbon;
use Filafly\Icons\Carbon\Enums\CarbonStyle;
use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class CarbonIcons extends IconSet
{
    protected string $pluginId = 'filafly-filament-carbon-icons';

    protected mixed $iconEnum = Carbon::class;

    protected mixed $styleEnum = CarbonStyle::class;

    protected mixed $defaultStyle = CarbonStyle::Regular;

    protected array $iconMap = [
        // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Carbon::Search,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Carbon::Filter,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Carbon::Home,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Carbon::ArrowRight,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Carbon::ArrowLeft,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Carbon::Edit,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Carbon::Group,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Carbon::View,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Carbon::CaretLeft,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Carbon::CaretRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Carbon::CaretRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Carbon::CaretLeft,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Carbon::CaretUp,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Carbon::CurrencyDollar,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Carbon::Settings,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Carbon::Add,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Carbon::CaretDown,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Carbon::Sun,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Carbon::Moon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Carbon::Screen,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Carbon::Close,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Carbon::List,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Carbon::CaretDown,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Carbon::Notification,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => Carbon::User,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Carbon::Logout,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Carbon::Logout,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Carbon::Book,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => Carbon::LogoGithub,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Carbon::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Carbon::CaretUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Carbon::TrashCan,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Carbon::CaretDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Carbon::ArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Carbon::ArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Carbon::ArrowsVertical,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Carbon::Search,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Carbon::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Carbon::ArrowsHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Carbon::ArrowsHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Carbon::ArrowsVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Carbon::ArrowDown,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Carbon::ArrowLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Carbon::ArrowRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Carbon::ArrowUp,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Carbon::ArrowDownLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Carbon::ArrowUpRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Carbon::ArrowsHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Carbon::ZoomIn,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Carbon::ZoomOut,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Carbon::TrashCan,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Carbon::ArrowsVertical,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Carbon::Copy,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Carbon::CaretUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Carbon::TrashCan,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Carbon::CaretDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Carbon::ArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Carbon::ArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Carbon::ArrowsVertical,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Carbon::Add,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Carbon::Edit,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Carbon::ViewOff,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Carbon::View,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Carbon::Close,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Carbon::Checkmark,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Carbon::Column,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => Carbon::Checkmark,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => Carbon::ArrowsVertical,
        TablesIconAlias::ACTIONS_FILTER => Carbon::Filter,
        TablesIconAlias::ACTIONS_GROUP => Carbon::Group,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Carbon::OverflowMenuVertical,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Carbon::CaretDown,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Carbon::ErrorOutline,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Carbon::CheckmarkOutline,
        TablesIconAlias::EMPTY_STATE => Carbon::Close,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Carbon::CheckmarkOutline,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Carbon::Calendar,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Carbon::Sigma,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Carbon::ArrowsHorizontal,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Carbon::ChevronSort,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Carbon::Translate,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Carbon::Close,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Carbon::CaretUp,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Carbon::CaretUp,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => Carbon::CaretDown,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Carbon::CaretDown,
        TablesIconAlias::REORDER_HANDLE => Carbon::OverflowMenuHorizontal,
        TablesIconAlias::SEARCH_FIELD => Carbon::Search,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Carbon::Close,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Carbon::Close,
        NotificationsIconAlias::NOTIFICATION_DANGER => Carbon::ErrorOutline,
        NotificationsIconAlias::NOTIFICATION_INFO => Carbon::Information,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Carbon::CheckmarkOutline,
        NotificationsIconAlias::NOTIFICATION_WARNING => Carbon::Warning,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Carbon::OverflowMenuVertical,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Carbon::Add,
        ActionsIconAlias::DELETE_ACTION => Carbon::TrashCan,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Carbon::TrashCan,
        ActionsIconAlias::DELETE_ACTION_MODAL => Carbon::TrashCan,
        ActionsIconAlias::DETACH_ACTION => Carbon::Unlink,
        ActionsIconAlias::DETACH_ACTION_MODAL => Carbon::Unlink,
        ActionsIconAlias::DISSOCIATE_ACTION => Carbon::Unlink,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Carbon::Unlink,
        ActionsIconAlias::EDIT_ACTION => Carbon::Edit,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Carbon::Edit,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Carbon::Download,
        ActionsIconAlias::FORCE_DELETE_ACTION => Carbon::TrashCan,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Carbon::TrashCan,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Carbon::TrashCan,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Carbon::Upload,
        ActionsIconAlias::MODAL_CONFIRMATION => Carbon::Warning,
        ActionsIconAlias::REPLICATE_ACTION => Carbon::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Carbon::Copy,
        ActionsIconAlias::RESTORE_ACTION => Carbon::ArrowUpLeft,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Carbon::ArrowUpLeft,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Carbon::ArrowUpLeft,
        ActionsIconAlias::VIEW_ACTION => Carbon::View,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Carbon::View,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Carbon::ErrorOutline,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Carbon::CheckmarkOutline,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Carbon::Checkmark,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Carbon::Close,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Carbon::CaretRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Carbon::CaretLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Carbon::Close,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Carbon::ChevronLeft,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Carbon::ChevronRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Carbon::ChevronRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Carbon::ChevronLeft,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Carbon::CaretRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Carbon::CaretLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Carbon::CaretLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Carbon::CaretRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Carbon::CaretDown,
    ];
}
