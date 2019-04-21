<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85dad6cdaa382420394e83328a43b4ee
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VisualComposer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VisualComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/visualcomposer',
        ),
    );

    public static $classMap = array (
        'VisualComposer\\Application' => __DIR__ . '/../..' . '/visualcomposer/Application.php',
        'VisualComposer\\Framework\\Application' => __DIR__ . '/../..' . '/visualcomposer/Framework/Application.php',
        'VisualComposer\\Framework\\Autoload' => __DIR__ . '/../..' . '/visualcomposer/Framework/Autoload.php',
        'VisualComposer\\Framework\\Container' => __DIR__ . '/../..' . '/visualcomposer/Framework/Container.php',
        'VisualComposer\\Framework\\Illuminate\\Container\\BindingResolutionException' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Container/BindingResolutionException.php',
        'VisualComposer\\Framework\\Illuminate\\Container\\Container' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Container/Container.php',
        'VisualComposer\\Framework\\Illuminate\\Contracts\\Container\\Container' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Contracts/Container/Container.php',
        'VisualComposer\\Framework\\Illuminate\\Events\\Dispatcher' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Events/Dispatcher.php',
        'VisualComposer\\Framework\\Illuminate\\Filters\\Dispatcher' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Filters/Dispatcher.php',
        'VisualComposer\\Framework\\Illuminate\\Support\\Helper' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Support/Helper.php',
        'VisualComposer\\Framework\\Illuminate\\Support\\Immutable' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Support/Immutable.php',
        'VisualComposer\\Framework\\Illuminate\\Support\\Module' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Support/Module.php',
        'VisualComposer\\Framework\\Illuminate\\Support\\Traits\\Container' => __DIR__ . '/../..' . '/visualcomposer/Framework/Illuminate/Support/Traits/Container.php',
        'VisualComposer\\Helpers\\Access\\CurrentUser' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Access/CurrentUser.php',
        'VisualComposer\\Helpers\\Access\\EditorPostType' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Access/EditorPostType.php',
        'VisualComposer\\Helpers\\Access\\Role' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Access/Role.php',
        'VisualComposer\\Helpers\\Access\\Traits\\Access' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Access/Traits/Access.php',
        'VisualComposer\\Helpers\\Access\\UserCapabilities' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Access/UserCapabilities.php',
        'VisualComposer\\Helpers\\AddonViews' => __DIR__ . '/../..' . '/visualcomposer/Helpers/AddonViews.php',
        'VisualComposer\\Helpers\\Assets' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Assets.php',
        'VisualComposer\\Helpers\\AssetsEnqueue' => __DIR__ . '/../..' . '/visualcomposer/Helpers/AssetsEnqueue.php',
        'VisualComposer\\Helpers\\AssetsShared' => __DIR__ . '/../..' . '/visualcomposer/Helpers/AssetsShared.php',
        'VisualComposer\\Helpers\\Core' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Core.php',
        'VisualComposer\\Helpers\\Data' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Data.php',
        'VisualComposer\\Helpers\\DefaultElements' => __DIR__ . '/../..' . '/visualcomposer/Helpers/DefaultElements.php',
        'VisualComposer\\Helpers\\Differ' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Differ.php',
        'VisualComposer\\Helpers\\EditorTemplates' => __DIR__ . '/../..' . '/visualcomposer/Helpers/EditorTemplates.php',
        'VisualComposer\\Helpers\\ElementViews' => __DIR__ . '/../..' . '/visualcomposer/Helpers/ElementViews.php',
        'VisualComposer\\Helpers\\Events' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Events.php',
        'VisualComposer\\Helpers\\File' => __DIR__ . '/../..' . '/visualcomposer/Helpers/File.php',
        'VisualComposer\\Helpers\\Filters' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Filters.php',
        'VisualComposer\\Helpers\\Frontend' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Frontend.php',
        'VisualComposer\\Helpers\\GridItemTemplate' => __DIR__ . '/../..' . '/visualcomposer/Helpers/GridItemTemplate.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\ActionBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/ActionBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\AddonsBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/AddonsBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\CategoriesBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/CategoriesBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\EditorBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/EditorBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\ElementsBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/ElementsBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\HubTeaserBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/HubTeaserBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\HubTemplatesBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/HubTemplatesBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\SharedLibrariesBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/SharedLibrariesBundle.php',
        'VisualComposer\\Helpers\\Hub\\Actions\\TemplatesBundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Actions/TemplatesBundle.php',
        'VisualComposer\\Helpers\\Hub\\Addons' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Addons.php',
        'VisualComposer\\Helpers\\Hub\\Bundle' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Bundle.php',
        'VisualComposer\\Helpers\\Hub\\Categories' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Categories.php',
        'VisualComposer\\Helpers\\Hub\\Download' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Download.php',
        'VisualComposer\\Helpers\\Hub\\Elements' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Elements.php',
        'VisualComposer\\Helpers\\Hub\\Groups' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Groups.php',
        'VisualComposer\\Helpers\\Hub\\SharedLibraries' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/SharedLibraries.php',
        'VisualComposer\\Helpers\\Hub\\Templates' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Templates.php',
        'VisualComposer\\Helpers\\Hub\\Update' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Hub/Update.php',
        'VisualComposer\\Helpers\\License' => __DIR__ . '/../..' . '/visualcomposer/Helpers/License.php',
        'VisualComposer\\Helpers\\Localizations' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Localizations.php',
        'VisualComposer\\Helpers\\Logger' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Logger.php',
        'VisualComposer\\Helpers\\LoginCategory' => __DIR__ . '/../..' . '/visualcomposer/Helpers/LoginCategory.php',
        'VisualComposer\\Helpers\\Nonce' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Nonce.php',
        'VisualComposer\\Helpers\\Notice' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Notice.php',
        'VisualComposer\\Helpers\\Options' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Options.php',
        'VisualComposer\\Helpers\\PostType' => __DIR__ . '/../..' . '/visualcomposer/Helpers/PostType.php',
        'VisualComposer\\Helpers\\PostsGridPagination' => __DIR__ . '/../..' . '/visualcomposer/Helpers/PostsGridPagination.php',
        'VisualComposer\\Helpers\\PostsGridPostIterator' => __DIR__ . '/../..' . '/visualcomposer/Helpers/PostsGridPostIterator.php',
        'VisualComposer\\Helpers\\PostsGridSourcePosts' => __DIR__ . '/../..' . '/visualcomposer/Helpers/PostsGridSourcePosts.php',
        'VisualComposer\\Helpers\\Request' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Request.php',
        'VisualComposer\\Helpers\\Settings\\Pages\\About' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Settings/Pages/About.php',
        'VisualComposer\\Helpers\\Settings\\SettingsHelper' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Settings/SettingsHelper.php',
        'VisualComposer\\Helpers\\Status' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Status.php',
        'VisualComposer\\Helpers\\Str' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Str.php',
        'VisualComposer\\Helpers\\Tabs' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Tabs.php',
        'VisualComposer\\Helpers\\Token' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Token.php',
        'VisualComposer\\Helpers\\Traits\\EventsFilters' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Traits/EventsFilters.php',
        'VisualComposer\\Helpers\\Traits\\WpFiltersActions' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Traits/WpFiltersActions.php',
        'VisualComposer\\Helpers\\Url' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Url.php',
        'VisualComposer\\Helpers\\Utm' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Utm.php',
        'VisualComposer\\Helpers\\Views' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Views.php',
        'VisualComposer\\Helpers\\Wp' => __DIR__ . '/../..' . '/visualcomposer/Helpers/Wp.php',
        'VisualComposer\\Helpers\\WpMedia' => __DIR__ . '/../..' . '/visualcomposer/Helpers/WpMedia.php',
        'VisualComposer\\Helpers\\WpWidgets' => __DIR__ . '/../..' . '/visualcomposer/Helpers/WpWidgets.php',
        'VisualComposer\\Modules\\Api\\ApiRegisterTrait' => __DIR__ . '/../..' . '/visualcomposer/Modules/Api/ApiRegisterTrait.php',
        'VisualComposer\\Modules\\Api\\Factory' => __DIR__ . '/../..' . '/visualcomposer/Modules/Api/Factory.php',
        'VisualComposer\\Modules\\Assets\\AssetResetController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/AssetResetController.php',
        'VisualComposer\\Modules\\Assets\\DataController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/DataController.php',
        'VisualComposer\\Modules\\Assets\\EnqueueController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/EnqueueController.php',
        'VisualComposer\\Modules\\Assets\\FileController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/FileController.php',
        'VisualComposer\\Modules\\Assets\\JsDataController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/JsDataController.php',
        'VisualComposer\\Modules\\Assets\\JsEnqueueController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/JsEnqueueController.php',
        'VisualComposer\\Modules\\Assets\\PreviewDataController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/PreviewDataController.php',
        'VisualComposer\\Modules\\Assets\\PreviewEnqueueController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/PreviewEnqueueController.php',
        'VisualComposer\\Modules\\Assets\\PreviewJsDataController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/PreviewJsDataController.php',
        'VisualComposer\\Modules\\Assets\\PreviewJsEnqueueController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/PreviewJsEnqueueController.php',
        'VisualComposer\\Modules\\Assets\\SharedController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/SharedController.php',
        'VisualComposer\\Modules\\Assets\\VendorBundleController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Assets/VendorBundleController.php',
        'VisualComposer\\Modules\\Autoload\\AddonsAutoload' => __DIR__ . '/../..' . '/visualcomposer/Modules/Autoload/AddonsAutoload.php',
        'VisualComposer\\Modules\\Autoload\\ElementsAutoload' => __DIR__ . '/../..' . '/visualcomposer/Modules/Autoload/ElementsAutoload.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\AjaxForm\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/AjaxForm/Controller.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\AutoComplete\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/AutoComplete/Controller.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\CodeMirror\\CodeMirrorController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/CodeMirror/CodeMirrorController.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\IconPicker\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/IconPicker/Controller.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\Url\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/Url/Controller.php',
        'VisualComposer\\Modules\\Editors\\Attributes\\WpEditor' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Attributes/WpEditor.php',
        'VisualComposer\\Modules\\Editors\\Backend\\SaveSetEditorController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Backend/SaveSetEditorController.php',
        'VisualComposer\\Modules\\Editors\\DataAjax\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/DataAjax/Controller.php',
        'VisualComposer\\Modules\\Editors\\DataAjax\\RevisionController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/DataAjax/RevisionController.php',
        'VisualComposer\\Modules\\Editors\\EditPostLinks\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/EditPostLinks/Controller.php',
        'VisualComposer\\Modules\\Editors\\EnvController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/EnvController.php',
        'VisualComposer\\Modules\\Editors\\FrontendLayoutSwitcher\\BundleController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/FrontendLayoutSwitcher/BundleController.php',
        'VisualComposer\\Modules\\Editors\\Frontend\\BundleController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Frontend/BundleController.php',
        'VisualComposer\\Modules\\Editors\\Frontend\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Frontend/Controller.php',
        'VisualComposer\\Modules\\Editors\\Frontend\\HeartbeatController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Frontend/HeartbeatController.php',
        'VisualComposer\\Modules\\Editors\\Frontend\\MenuController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Frontend/MenuController.php',
        'VisualComposer\\Modules\\Editors\\MediaSizesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/MediaSizesController.php',
        'VisualComposer\\Modules\\Editors\\PageEditable\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/PageEditable/Controller.php',
        'VisualComposer\\Modules\\Editors\\Settings\\ItemPreviewController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/ItemPreviewController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\PageEditableTemplatesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/PageEditableTemplatesController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\PageTemplatesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/PageTemplatesController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\PageTemplatesSaveController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/PageTemplatesSaveController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\PageTemplatesVariablesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/PageTemplatesVariablesController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\SlugController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/SlugController.php',
        'VisualComposer\\Modules\\Editors\\Settings\\TitleController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Settings/TitleController.php',
        'VisualComposer\\Modules\\Editors\\Templates\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Templates/Controller.php',
        'VisualComposer\\Modules\\Editors\\Templates\\PostType' => __DIR__ . '/../..' . '/visualcomposer/Modules/Editors/Templates/PostType.php',
        'VisualComposer\\Modules\\Elements\\AjaxImageController\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/AjaxImageController/Controller.php',
        'VisualComposer\\Modules\\Elements\\AjaxShortcode\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/AjaxShortcode/Controller.php',
        'VisualComposer\\Modules\\Elements\\ApiController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/ApiController.php',
        'VisualComposer\\Modules\\Elements\\AssetShortcode\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/AssetShortcode/Controller.php',
        'VisualComposer\\Modules\\Elements\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/Controller.php',
        'VisualComposer\\Modules\\Elements\\EncodedShortcode\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/EncodedShortcode/Controller.php',
        'VisualComposer\\Modules\\Elements\\GlobalVariables\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/GlobalVariables/Controller.php',
        'VisualComposer\\Modules\\Elements\\Traits\\AddShortcodeTrait' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/Traits/AddShortcodeTrait.php',
        'VisualComposer\\Modules\\Elements\\Traits\\ShortcodesTrait' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/Traits/ShortcodesTrait.php',
        'VisualComposer\\Modules\\Elements\\WpWidgets\\WpWidgetsController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/WpWidgets/WpWidgetsController.php',
        'VisualComposer\\Modules\\Elements\\WpWidgets\\WpWidgetsShortcodes' => __DIR__ . '/../..' . '/visualcomposer/Modules/Elements/WpWidgets/WpWidgetsShortcodes.php',
        'VisualComposer\\Modules\\FrontView\\AssetUrlReplaceController' => __DIR__ . '/../..' . '/visualcomposer/Modules/FrontView/AssetUrlReplaceController.php',
        'VisualComposer\\Modules\\FrontView\\FrontVariablesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/FrontView/FrontVariablesController.php',
        'VisualComposer\\Modules\\FrontView\\FrontViewController' => __DIR__ . '/../..' . '/visualcomposer/Modules/FrontView/FrontViewController.php',
        'VisualComposer\\Modules\\FrontView\\PluginsInfoController' => __DIR__ . '/../..' . '/visualcomposer/Modules/FrontView/PluginsInfoController.php',
        'VisualComposer\\Modules\\Hub\\Actions\\PostUpdateAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Actions/PostUpdateAction.php',
        'VisualComposer\\Modules\\Hub\\Addons\\AddonDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/AddonDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Addons\\Addons' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/Addons.php',
        'VisualComposer\\Modules\\Hub\\Addons\\AddonsDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/AddonsDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\Addons\\AddonsUpdater' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/AddonsUpdater.php',
        'VisualComposer\\Modules\\Hub\\Addons\\Teasers\\TeasersController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/Teasers/TeasersController.php',
        'VisualComposer\\Modules\\Hub\\Addons\\Teasers\\TeasersDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Addons/Teasers/TeasersDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Assets\\AssetDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Assets/AssetDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\Assets\\SharedDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Assets/SharedDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Elements\\ElementDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/ElementDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\Elements\\ElementDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/ElementDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Elements\\Elements' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/Elements.php',
        'VisualComposer\\Modules\\Hub\\Elements\\ElementsUpdater' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/ElementsUpdater.php',
        'VisualComposer\\Modules\\Hub\\Elements\\Teasers\\TeasersController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/Teasers/TeasersController.php',
        'VisualComposer\\Modules\\Hub\\Elements\\Teasers\\TeasersDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Elements/Teasers/TeasersDownloadController.php',
        'VisualComposer\\Modules\\Hub\\GroupsCategories\\Categories' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/GroupsCategories/Categories.php',
        'VisualComposer\\Modules\\Hub\\GroupsCategories\\CategoriesDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/GroupsCategories/CategoriesDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\GroupsCategories\\CategoriesUpdater' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/GroupsCategories/CategoriesUpdater.php',
        'VisualComposer\\Modules\\Hub\\GroupsCategories\\Groups' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/GroupsCategories/Groups.php',
        'VisualComposer\\Modules\\Hub\\GroupsCategories\\GroupsUpdater' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/GroupsCategories/GroupsUpdater.php',
        'VisualComposer\\Modules\\Hub\\JsonActionsController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/JsonActionsController.php',
        'VisualComposer\\Modules\\Hub\\JsonDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/JsonDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Pages\\UpdateBePage' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Pages/UpdateBePage.php',
        'VisualComposer\\Modules\\Hub\\Pages\\UpdateFePage' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Pages/UpdateFePage.php',
        'VisualComposer\\Modules\\Hub\\Templates\\HubTemplatesDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/HubTemplatesDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\Templates\\PredefinedTemplateDownloadAction' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/PredefinedTemplateDownloadAction.php',
        'VisualComposer\\Modules\\Hub\\Templates\\Teasers\\TeasersController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/Teasers/TeasersController.php',
        'VisualComposer\\Modules\\Hub\\Templates\\Teasers\\TeasersDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/Teasers/TeasersDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Templates\\TemplateDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/TemplateDownloadController.php',
        'VisualComposer\\Modules\\Hub\\Templates\\TemplatesUpdater' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Templates/TemplatesUpdater.php',
        'VisualComposer\\Modules\\Hub\\Traits\\Action' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Traits/Action.php',
        'VisualComposer\\Modules\\Hub\\Unsplash\\UnsplashDownloadController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/Unsplash/UnsplashDownloadController.php',
        'VisualComposer\\Modules\\Hub\\UpdateController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Hub/UpdateController.php',
        'VisualComposer\\Modules\\Internationalization\\Locale' => __DIR__ . '/../..' . '/visualcomposer/Modules/Internationalization/Locale.php',
        'VisualComposer\\Modules\\License\\ActivationRedirectController' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/ActivationRedirectController.php',
        'VisualComposer\\Modules\\License\\DeactivationController' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/DeactivationController.php',
        'VisualComposer\\Modules\\License\\ErrorReportingController' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/ErrorReportingController.php',
        'VisualComposer\\Modules\\License\\LicenseController' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/LicenseController.php',
        'VisualComposer\\Modules\\License\\Pages\\GettingStarted' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/Pages/GettingStarted.php',
        'VisualComposer\\Modules\\License\\Pages\\GoPremium' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/Pages/GoPremium.php',
        'VisualComposer\\Modules\\License\\UpdateVariablesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/License/UpdateVariablesController.php',
        'VisualComposer\\Modules\\Migrations\\Assets22Migration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/Assets22Migration.php',
        'VisualComposer\\Modules\\Migrations\\CustomTemplatesUpdate24Migration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/CustomTemplatesUpdate24Migration.php',
        'VisualComposer\\Modules\\Migrations\\DefaultElementsMigration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/DefaultElementsMigration.php',
        'VisualComposer\\Modules\\Migrations\\GlobalJavascriptMigration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/GlobalJavascriptMigration.php',
        'VisualComposer\\Modules\\Migrations\\MigrationsController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/MigrationsController.php',
        'VisualComposer\\Modules\\Migrations\\PredefinedTemplateMigration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/PredefinedTemplateMigration.php',
        'VisualComposer\\Modules\\Migrations\\Templates114Migration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/Templates114Migration.php',
        'VisualComposer\\Modules\\Migrations\\UpdateGlobalElementsMigration' => __DIR__ . '/../..' . '/visualcomposer/Modules/Migrations/UpdateGlobalElementsMigration.php',
        'VisualComposer\\Modules\\Settings\\Ajax\\SystemStatusController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Ajax/SystemStatusController.php',
        'VisualComposer\\Modules\\Settings\\Fields\\CssEditor' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Fields/CssEditor.php',
        'VisualComposer\\Modules\\Settings\\Fields\\FactoryResetController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Fields/FactoryResetController.php',
        'VisualComposer\\Modules\\Settings\\Fields\\JsEditor' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Fields/JsEditor.php',
        'VisualComposer\\Modules\\Settings\\Fields\\PostTypes' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Fields/PostTypes.php',
        'VisualComposer\\Modules\\Settings\\MenuController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/MenuController.php',
        'VisualComposer\\Modules\\Settings\\NoticeController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/NoticeController.php',
        'VisualComposer\\Modules\\Settings\\Pages\\About' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Pages/About.php',
        'VisualComposer\\Modules\\Settings\\Pages\\CssJsSettings' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Pages/CssJsSettings.php',
        'VisualComposer\\Modules\\Settings\\Pages\\Settings' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Pages/Settings.php',
        'VisualComposer\\Modules\\Settings\\Pages\\SystemStatus' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Pages/SystemStatus.php',
        'VisualComposer\\Modules\\Settings\\Traits\\Fields' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Traits/Fields.php',
        'VisualComposer\\Modules\\Settings\\Traits\\Page' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Traits/Page.php',
        'VisualComposer\\Modules\\Settings\\Traits\\SubMenu' => __DIR__ . '/../..' . '/visualcomposer/Modules/Settings/Traits/SubMenu.php',
        'VisualComposer\\Modules\\System\\Activation\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/System/Activation/Controller.php',
        'VisualComposer\\Modules\\System\\Activation\\Notice' => __DIR__ . '/../..' . '/visualcomposer/Modules/System/Activation/Notice.php',
        'VisualComposer\\Modules\\System\\Ajax\\AdminController' => __DIR__ . '/../..' . '/visualcomposer/Modules/System/Ajax/AdminController.php',
        'VisualComposer\\Modules\\System\\Ajax\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/System/Ajax/Controller.php',
        'VisualComposer\\Modules\\System\\TextDomain\\Controller' => __DIR__ . '/../..' . '/visualcomposer/Modules/System/TextDomain/Controller.php',
        'VisualComposer\\Modules\\Updates\\UpdatesController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Updates/UpdatesController.php',
        'VisualComposer\\Modules\\Utm\\Utm' => __DIR__ . '/../..' . '/visualcomposer/Modules/Utm/Utm.php',
        'VisualComposer\\Modules\\Vendors\\GutenbergAttributeController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/GutenbergAttributeController.php',
        'VisualComposer\\Modules\\Vendors\\JetPack' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/JetPack.php',
        'VisualComposer\\Modules\\Vendors\\MetaSliderController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/MetaSliderController.php',
        'VisualComposer\\Modules\\Vendors\\NextGen' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/NextGen.php',
        'VisualComposer\\Modules\\Vendors\\NinjaFormsController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/NinjaFormsController.php',
        'VisualComposer\\Modules\\Vendors\\RevSliderController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/RevSliderController.php',
        'VisualComposer\\Modules\\Vendors\\ThemeTwentySeventeenController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/ThemeTwentySeventeenController.php',
        'VisualComposer\\Modules\\Vendors\\WooCommerceController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/WooCommerceController.php',
        'VisualComposer\\Modules\\Vendors\\WordpressController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/WordpressController.php',
        'VisualComposer\\Modules\\Vendors\\WpbakeryController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/WpbakeryController.php',
        'VisualComposer\\Modules\\Vendors\\WpmlController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/WpmlController.php',
        'VisualComposer\\Modules\\Vendors\\YoastController' => __DIR__ . '/../..' . '/visualcomposer/Modules/Vendors/YoastController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85dad6cdaa382420394e83328a43b4ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85dad6cdaa382420394e83328a43b4ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85dad6cdaa382420394e83328a43b4ee::$classMap;

        }, null, ClassLoader::class);
    }
}
