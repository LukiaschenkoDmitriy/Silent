<?php declare(strict_types=1);

namespace Silent\Core\DTO\Capabilities\Chrome;

/**
 * Chromium / Chrome command-line switches.
 * Descriptions sourced from https://peter.sh/experiments/chromium-command-line-switches/
 * (as of October 2026).
 */
enum ChromeSwitches: string {
    /**
     * Accept an empty signature when loading a variations seed. This is for testing purposes.
     */
    case AcceptEmptyVariationsSeedSignature = "--accept-empty-variations-seed-signature";
    /**
     * Specifies Accept-Language to send to servers and expose to JavaScript via the navigator.language DOM property. language[-country] where language is the 2 letter code from ISO-639.
     */
    case AcceptLang = "--accept-lang";
    /**
     * Specifies a comma-separated list of SchemefulSite strings that should be treated as sensitive sites by the actor execution engine (bypassing the optimization guide component updater check). Useful for testing. Note that these entries are site-scoped (scheme and eTLD+1), not origin-scoped, so specifying a site will match all subdomains and ports ...
     * Potential parameters: see description.
     */
    case ActorSensitiveSites = "--actor-sensitive-sites";
    /**
     * File or directory path where actor traces should be recorded.
     * Potential parameters: see description.
     */
    case ActorTracePath = "--actor-trace-path";
    /**
     * Manually sets additional Private State Tokens key commitments in the network service to the given value, which should be a JSON dictionary satisfying the requirements of TrustTokenKeyCommitmentParser::ParseMultipleIssuers. These keys are available in addition to keys provided by the most recent call to TrustTokenKeyCommitments::Set. For issuers ...
     * Potential parameters: see description.
     */
    case AdditionalPrivateStateTokenKeyCommitments = "--additional-private-state-token-key-commitments";
    /**
     * Add additional capabilities to the AppContainer sandbox used for XR compositing.
     */
    case AddXrAppcontainerCaps = "--add-xr-appcontainer-caps";
    /**
     * Overrides the default endpoint URL for the Agentic Permission Service (APS).
     * Potential parameters: see description.
     */
    case AgentPermissionServiceEndpoint = "--agent-permission-service-endpoint";
    /**
     * Please keep alphabetized.
     */
    case AggressiveCacheDiscard = "--aggressive-cache-discard";
    /**
     * Enables test mode for the AI overlay dialog, which automatically opens the dialog on browser startup and exposes programmatic test APIs to WebUI.
     */
    case AIOverlayDialogTestMode = "--ai-overlay-dialog-test-mode";
    /**
     * Only if we're running in an unsigned build, passing this flag will allow app shims whose code signature does not match what chrome is expecting to still connect to chrome. This is used by some tests to allow the test to pretend to be a valid app shim.
     */
    case AllowAppshimSignatureMismatchForTests = "--allow-appshim-signature-mismatch-for-tests";
    /**
     * Allows headless mode to access any URL whose scheme is chrome://.
     * Potential parameters: see description.
     */
    case AllowChromeSchemeUrl = "--allow-chrome-scheme-url";
    /**
     * Allows plugins to be loaded in the command line for testing.
     * Potential parameters: see description.
     */
    case AllowCommandLinePlugins = "--allow-command-line-plugins";
    /**
     * Allows third-party content included on a page to prompt for a HTTP basic auth username/password pair.
     */
    case AllowCrossOriginAuthPrompt = "--allow-cross-origin-auth-prompt";
    /**
     * No description…
     */
    case AllowEmptyPasswordsInTests = "--allow-empty-passwords-in-tests";
    /**
     * Allow access to external pages during web tests.
     */
    case AllowExternalPages = "--allow-external-pages";
    /**
     * If this flag is passed, failed policy fetches will not cause profile initialization to fail. This is useful for tests because it means that tests don't have to mock out the policy infrastructure.
     */
    case AllowFailedPolicyFetchForTest = "--allow-failed-policy-fetch-for-test";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case AllowFileAccessFromFiles = "--allow-file-access-from-files";
    /**
     * Mute extension errors while working with new manifest version.
     */
    case AllowFutureManifestVersion = "--allow-future-manifest-version";
    /**
     * Allows non-https URL for background_page for hosted apps.
     * Potential parameters: see description.
     */
    case AllowHttpBackgroundPage = "--allow-http-background-page";
    /**
     * Allow non-secure origins to use the screen capture API and the desktopCapture extension API.
     */
    case AllowHttpScreenCapture = "--allow-http-screen-capture";
    /**
     * Enables TLS/SSL errors on localhost to be ignored (no interstitial, no blocking of requests).
     */
    case AllowInsecureLocalhost = "--allow-insecure-localhost";
    /**
     * Allows the browser to load extensions that lack a modern manifest when that would otherwise be forbidden.
     */
    case AllowLegacyExtensionManifests = "--allow-legacy-extension-manifests";
    /**
     * Adds the given extension ID to all the permission allowlists.
     * Potential parameters: see description.
     */
    case AllowListedExtensionId = "--allowlisted-extension-id";
    /**
     * Allows loopback interface to be added in network list for peer connection.
     * Potential parameters: see description.
     */
    case AllowLoopbackInPeerConnection = "--allow-loopback-in-peer-connection";
    /**
     * When this flag is set, the OS installation UI can be accessed. This allows the user to install from USB to disk.
     */
    case AllowOsInstall = "--allow-os-install";
    /**
     * Allows processing of input before a frame has been committed.
     */
    case AllowPreCommitInput = "--allow-pre-commit-input";
    /**
     * Allows remote attestation (RA) in dev mode for testing purpose. Usually RA is disabled in dev mode because it will always fail. However, there are cases in testing where we do want to go through the permission flow even in dev mode. This can be enabled by this flag.
     */
    case AllowRaInDevMode = "--allow-ra-in-dev-mode";
    /**
     * By default, an HTTPS page cannot run JavaScript, CSS or resources from HTTP URLs. This provides an override to get the old insecure behavior.
     * Potential parameters: see description.
     */
    case AllowRunningInsecureContent = "--allow-running-insecure-content";
    /**
     * Flags owned by the service manager sandbox.
     */
    case AllowSandboxDebugging = "--allow-sandbox-debugging";
    /**
     * Allows Web Push notifications that do not show a notification.
     */
    case AllowSilentPush = "--allow-silent-push";
    /**
     * Allows third party modules to inject by disabling the BINARY_SIGNATURE mitigation policy on Win10+. Also has other effects in ELF.
     */
    case AllowThirdPartyModules = "--allow-third-party-modules";
    /**
     * Allows an unpacked Perfetto UI extension to be trusted.
     */
    case AllowUnpackedPerfettoExtension = "--allow-unpacked-perfetto-extension";
    /**
     * Allows DevTools frontend from remote origins to load local file:// resources. This should only be enabled when explicitly needed for remote debugging with local source maps.
     */
    case AllowUnsafeDevtoolsRemoteFileLoading = "--allow-unsafe-devtools-remote-file-loading";
    /**
     * A comma-separated, case-insenitive list of video codecs to allow. If specified, codecs not matching the list will not be used. '*' will match everything, '-' at the start of an entry means codec is disallowed. First entry that matches determines the outcome. Codec names are as returned by `GetCodecName()` in media/base/video_codecs.cc
     * Potential parameters: see description.
     */
    case AllowVideoCodecs = "--allow-video-codecs";
    /**
     * Override for the URL used for the ChromeOS Almanac API. Used for local testing with a non-production server (e.g. "--almanac-api-url=http://localhost:8000").
     * Potential parameters: see description.
     */
    case AimanacApiUrl = "--almanac-api-url";
    /**
     * The Alsa device to use when opening an audio input stream.
     */
    case AlsaInputDevice = "--alsa-input-device";
    /**
     * The Alsa device to use when opening an audio stream.
     */
    case AlsaOutputDevice = "--alsa-output-device";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case AlsoEmitSuccessLogs = "--also-emit-success-logs";
    /**
     * Causes HDCP of the specified type to always be enabled when an external display is connected. Used for HDCP compliance testing on ChromeOS.
     */
    case AlwaysEnableHDCP = "--always-enable-hdcp";
    /**
     * Always use the complex text path for web tests.
     * Potential parameters: see description.
     */
    case AlwaysUseComplexTest = "--always-use-complex-text";
    /**
     * If enabled Entra SSO will accept authentication headers from a specific list of non-production Microsoft Authentication broker apps.
     * Potential parameters: see description.
     */
    case AndroidEntraSSOAllowDebugBrokers = "--android-entra-sso-allow-debug-brokers";
    /**
     * For testing, do not initialize child service process but also do not exit (until requested by browser).
     */
    case AndroidSkipChildServiceInitForTesting = "--android-skip-child-service-init-for-testing";
    /**
     * Scale factor to apply to every animation duration. Must be >= 0.0. This will only apply to LinearAnimation and its subclasses.
     * Potential parameters: see description.
     */
    case AnimationDurationScale = "--animation-duration-scale";
    /**
     * Specifies that the associated value should be launched in "application" mode.
     * Potential parameters: see description.
     */
    case App = "--app";
    /**
     * Specifies whether an app launched in kiosk mode was auto launched with zero delay. Used in order to properly restore auto-launched state during session restore flow.
     */
    case AppAutoLaunched = "--app-auto-launched";
    /**
     * Specifies that the extension-app with the specified id should be launched according to its configuration.
     */
    case AppId = "--app-id";
    /**
     * Overrides the launch url of an app with the specified url. This is used along with kAppId to launch a given app with the url corresponding to an item in the app's shortcuts menu.
     * Potential parameters: see description.
     */
    case AppLaunchUrlForShortcutsMenuItem = "--app-launch-url-for-shortcuts-menu-item";
    /**
     * Value of GAIA auth code for --force-app-mode.
     * Potential parameters: see description.
     */
    case AppModeAuthCode = "--app-mode-auth-code";
    /**
     * Value of OAuth2 refresh token for --force-app-mode.
     * Potential parameters: see description.
     */
    case AppModeOauthToken = "--app-mode-oauth-token";
    /**
     * Path for app's OEM manifest file.
     * Potential parameters: see description.
     */
    case AppModeOEMManifest = "--app-mode-oem-manifest";
    /**
     * This is used along with kAppId to indicate an app was launched during OS login, and which mode the app was launched in.
     */
    case AppRunOnOsLoginMode = "--app-run-on-os-login-mode";
    /**
     * Overrides the URL that the webstore APIs download extensions from. Note: the URL must contain one '%s' for the extension ID.
     * Potential parameters: see description.
     */
    case AppsGalleryDownloadUrl = "--apps-gallery-download-url";
    /**
     * Overrides the update url used by webstore extensions.
     * Potential parameters: see description.
     */
    case AppsGalleryUpdateUrl = "--apps-gallery-update-url";
    /**
     * Overrides the url that the browser treats as the webstore, granting it the webstore APIs and giving it some special protections.
     * Potential parameters: see description.
     */
    case AppsGalleryUrl = "--apps-gallery-url";
    /**
     * A process type (switches::kProcessType) that is used by App Shim processes. See chrome/app_shim/app_shim_main_delegate.mm.
     */
    case AppShim = "--app-shim";
    /**
     * Prevents Chrome from quitting when Chrome Apps are open.
     */
    case AppsKeepChromeAliveInTests = "--apps-keep-chrome-alive-in-tests";
    /**
     * Signals ARC support status on this device. This can take one of the following three values. - none: ARC is not installed on this device. (default) - installed: ARC is installed on this device, but not officially supported. Users can enable ARC only when Finch experiment is turned on. - officially-supported: ARC is installed and supported on this...
     * Potential parameters: see description.
     */
    case ArcAvailability = "--arc-availability";
    /**
     * DEPRECATED: Please use --arc-availability=installed. Signals the availability of the ARC instance on this device.
     * Potential parameters: see description.
     */
    case ArcAvailable = "--arc-available";
    /**
     * Switch that blocks KeyMint. When KeyMint is blocked, Keymaster is enabled.
     */
    case ArcBlockKeymint = "--arc-block-keymint";
    /**
     * Flag that forces ARC data be cleaned on each start.
     */
    case ArcDataCleanupOnStart = "--arc-data-cleanup-on-start";
    /**
     * Flag that disables ARC app sync flow that installs some apps silently. Used in autotests to resolve racy conditions.
     */
    case ArcDisableAppSync = "--arc-disable-app-sync";
    /**
     * Used in tests to disable DexOpt cache which is on by default.
     */
    case ArcDisableDexoptCache = "--arc-disable-dexopt-cache";
    /**
     * Flag that disables ARC download provider that prevents extra content to be downloaded and installed in context of Play Store and GMS Core.
     */
    case ArcDisableDownloadProvider = "--arc-disable-download-provider";
    /**
     * Used in autotest to disable GMS-core caches which is on by default.
     */
    case ArcDisableGmsCoreCache = "--arc-disable-gms-core-cache";
    /**
     * Flag that disables ARC locale sync with Android Container. Used in autotest to prevent conditions when certain apps, including Play Store may get restarted. Restarting Play Store may cause random test failures. Enabling this flag would also forces ARC Container to use 'en-US' as a locale and 'en-US,en' as preferred languages.
     */
    case ArcDisableLocaleSync = "--arc-disable-locale-sync";
    /**
     * Used to disable GMS scheduling of media store periodic indexing and corpora maintenance tasks. Used in performance tests to prevent running during testing which can cause unstable results or CPU not idle pre-test failures.
     */
    case ArcDisableMediaStoreMaintenance = "--arc-disable-media-store-maintenance";
    /**
     * Flag that disables ARC Play Auto Install flow that installs set of predefined apps silently. Used in autotests to resolve racy conditions.
     */
    case ArcDisablePlayAutoInstall = "--arc-disable-play-auto-install";
    /**
     * Used in autotest to disable TTS cache which is on by default.
     */
    case ArcDisableTtsCache = "--arc-disable-tts-cache";
    /**
     * Flag that enables key and ID attestation for KeyMint.
     */
    case ArcEnableAttestation = "--arc-enable-attestation";
    /**
     * Flag that indicates ARC images are formatted with EROFS (go/arcvm-erofs).
     */
    case ArcErofs = "--arc-erofs";
    /**
     * Flag that forces Android volumes (DocumentsProviders and Play files) to be mounted in the Files app. Used for testing.
     */
    case ArcForceMountAndroidVolumesInFiles = "--arc-force-mount-android-volumes-in-files";
    /**
     * Flag that forces the OptIn ui to be shown. Used in tests.
     */
    case ArcForceShowOptinUi = "--arc-force-show-optin-ui";
    /**
     * Flag that enables developer options needed to generate an ARC Play Auto Install roster. Used manually by developers.
     */
    case ArcGeneratePlayAutoInstall = "--arc-generate-play-auto-install";
    /**
     * Sets the mode of operation for ureadahead during ARC Container boot. readahead (default) - used during production and is equivalent to no switch being set. generate - used during Android Uprev data collector to pre-generate pack file and upload to Google Cloud as build artifact for CrOS build image. disabled - used for test purpose to disable ur...
     */
    case ArcHostUreadaheadMode = "--arc-host-ureadahead-mode";
    /**
     * Write ARC++ install events to chrome log for integration test.
     */
    case ArcInstallEventChromeLogForTests = "--arc-install-event-chrome-log-for-tests";
    /**
     * The following are the runtimes that WebXr supports.
     */
    case Arcore = "--arcore";
    /**
     * Used in autotest to specifies how to handle packages cache. Can be copy - copy resulting packages.xml to the temporary directory. skip-copy - skip initial packages cache setup and copy resulting packages.xml to the temporary directory.
     */
    case ArcPackagesCacheMode = "--arc-packages-cache-mode";
    /**
     * Used in autotest to forces Play Store auto-update state. Can be on - auto-update is forced on. off - auto-update is forced off.
     */
    case ArcPlayStoreAutoUpdate = "--arc-play-store-auto-update";
    /**
     * Set the scale for ARC apps. This is in DPI. e.g. 280 DPI is ~ 1.75 device scale factor. See https://source.android.com/compatibility/android-cdd#3_7_runtime_compatibility for list of supported DPI values.
     * Potential parameters: see description.
     */
    case ArcScale = "--arc-scale";
    /**
     * Defines how to start ARC. This can take one of the following values: - always-start automatically start with Play Store UI support. - always-start-with-no-play-store automatically start without Play Store UI. If it is not set, then ARC is started in default mode.
     * Potential parameters: see description.
     */
    case ArcStartMode = "--arc-start-mode";
    /**
     * Sets ARC Terms Of Service hostname url for testing.
     * Potential parameters: see description.
     */
    case ArcTosHostForTests = "--arc-tos-host-for-tests";
    /**
     * Flag that indicates ARC is using dev caches generated by data collector in Uprev rather than caches from CrOS build stage for arccachesetup service.
     */
    case ArcUseDevCaches = "--arc-use-dev-caches";
    /**
     * This flag is set when the device's hardware meets the hardware requirements for the ARCVM DLC.
     */
    case ArcvmDlcHardwareSatisfied = "--arcvm-dlc-hardware-satisfied";
    /**
     * Sets the mode of operation for ureadahead during ARCVM boot. If this switch is not set, ARCVM ureadahead will check for the presence and age of pack file and reads ahead files to page cache for improved boot performance. readahead (default) - used during production and is equivalent to no switch being set. This is used in tast test to explicitly...
     */
    case ArcvmUreadaheadMode = "--arcvm-ureadahead-mode";
    /**
     * Madvises the kernel to use Huge Pages for guest memory.
     */
    case ArcvmUseHugepages = "--arcvm-use-hugepages";
    /**
     * Flag to launch tests in the browser process.
     */
    case AsBrowser = "--as-browser";
    /**
     * Allows the Ash shelf to apply the default pin layout without waiting for Sync to download data from the server (which many tests can't achieve).
     */
    case AshAllowDefaultShelfPinLayoutIgnoringSync = "--ash-allow-default-shelf-pin-layout-ignoring-sync";
    /**
     * Force the pointer (cursor) position to be kept inside root windows.
     */
    case AshConstrainPointerToRoot = "--ash-constrain-pointer-to-root";
    /**
     * Overrides the minimum time that must pass between showing user contextual nudges. Unit of time is in seconds.
     */
    case AshContextualNudgesInterval = "--ash-contextual-nudges-interval";
    /**
     * Reset contextual nudge shown count on login.
     */
    case AshContextualNudgesResetShownCount = "--ash-contextual-nudges-reset-shown-count";
    /**
     * Enable keyboard shortcuts useful for debugging.
     */
    case AshDebugShortcuts = "--ash-debug-shortcuts";
    /**
     * Enable keyboard shortcuts used by developers only.
     */
    case AshDevShortcuts = "--ash-dev-shortcuts";
    /**
     * Disable the Touch Exploration Mode. Touch Exploration Mode will no longer be turned on automatically when spoken feedback is enabled when this flag is set.
     */
    case AshDisableTouchExplorationMode = "--ash-disable-touch-exploration-mode";
    /**
     * Enables key bindings to scroll magnified screen.
     */
    case AshEnableMagnifierKeyScroller = "--ash-enable-magnifier-key-scroller";
    /**
     * Enables the palette on every display, instead of only the internal one.
     */
    case AshEnablePaletteOnAllDisplays = "--ash-enable-palette-on-all-displays";
    /**
     * Keep sorted.
     */
    case AshEnableSoftwareMirroring = "--ash-enable-software-mirroring";
    /**
     * Enables unified desktop mode.
     */
    case AshEnableUnifiedDesktop = "--ash-enable-unified-desktop";
    /**
     * Hides notifications that are irrelevant to Chrome OS device factory testing, such as battery level updates.
     */
    case AshHideNotificationsForFactory = "--ash-hide-notifications-for-factory";
    /**
     * Sets a window size, optional position, optional scale factor and optional panel radii. "1024x768" creates a window of size 1024x768. "100+200-1024x768" positions the window at 100,200. "1024x768*2" sets the scale factor to 2 for a high DPI display. "1024x768~15|15|12|12" sets the radii of the panel corners as (upper_left=15px,upper_right=15px, l...
     * Potential parameters: see description.
     */
    case AshHostWindowBounds = "--ash-host-window-bounds";
    /**
     * Hides educational nudges that can interfere with tast integration tests. Somewhat similar to --no-first-run but affects system UI behavior, not browser behavior.
     */
    case AshNoNudges = "--ash-no-nudges";
    /**
     * Power button position includes the power button's physical display side and the percentage for power button center position to the display's width/height in landscape_primary screen orientation. The value is a JSON object containing a "position" property with the value "left", "right", "top", or "bottom". For "left" and "right", a "y" property s...
     * Potential parameters: see description.
     */
    case AshPowerButtonPosition = "--ash-power-button-position";
    /**
     * The physical position info of the side volume button while in landscape primary screen orientation. The value is a JSON object containing a "region" property with the value "keyboard", "screen" and a "side" property with the value "left", "right", "top", "bottom".
     * Potential parameters: see description.
     */
    case AshSideVolumeButtonPosition = "--ash-side-volume-button-position";
    /**
     * Enables the heads-up display for tracking touch points.
     */
    case AshTouchHud = "--ash-touch-hud";
    /**
     * Minimum time interval (in milliseconds) at which async touchmove events during scroll will be skipped during rAF signal when throttling is active.
     */
    case AsyncTouchMoveThrottleTimeMs = "--async-touch-move-throttle-time-ms";
    /**
     * For client applications who expect a single Mojo invitation attachment with a free-form name assigned to it, this specifies that attachment name. Either this or kNumericAttachmentNames must be specified on the command line.
     * Potential parameters: see description.
     */
    case AttachmentName = "--attachment-name";
    /**
     * Bypasses the selection of the data to be filled by the `AttemptFormFillingTool` and just picks the first suggestion for each form section. This is only intended for testing.
     */
    case AttemptFormFillingToolSkipsUi = "--attempt-form-filling-tool-skips-ui";
    /**
     * Supplies a mock OTP value for the `AttemptOtpFillingTool` and bypasses Google Account consent fetching, opt-in dialogs, and user confirmation dialogs, filling the mock value directly into the OTP field. This is only intended for testing. Takes precedence over one_time_tokens::switches::kMockOtpValue in AttemptOtpFillingTool if both are set.
     * Potential parameters: see description.
     */
    case AttemptOtpFillingToolMockValueSkipsChecks = "--attempt-otp-filling-tool-mock-value-skips-checks";
    /**
     * Used in AttestationClient to determine which Google Privacy CA to use for attestation.
     */
    case AttestationServer = "--attestation-server";
    /**
     * Allow users to specify a custom buffer size for debugging purpose.
     */
    case AudioBufferSize = "--audio-buffer-size";
    /**
     * Forces AudioManagerFuchsia to assume that the AudioCapturer implements echo cancellation.
     */
    case AudioCapturerWithEchoCancellation = "--audio-capturer-with-echo-cancellation";
    /**
     * Audio codecs supported by the HDMI sink is retrieved from the audio service process. EDID contains the Short Audio Descriptors, which list the audio decoders supported, and the information is presented as a bitmask of supported audio codecs.
     * Potential parameters: see description.
     */
    case AudioCodecsFromEdid = "--audio-codecs-from-edid";
    /**
     * Audio output switches.
     */
    case AudioOutputChannels = "--audio-output-channels";
    /**
     * Use high priority for the audio process.
     */
    case AudioProcessHighPriority = "--audio-process-high-priority";
    /**
     * If this switch is passed, the device policy DeviceMinimumVersion assumes that the device has reached Auto Update Expiration. This is useful for testing the policy behaviour on the DUT.
     */
    case AueReachedForUpdateRequiredTest = "--aue-reached-for-update-required-test";
    /**
     * (Most) Chrome OS hardware reports ACPI power button releases correctly. Standard hardware reports releases immediately after presses. If set, we lock the screen or shutdown the system immediately in response to a press instead of displaying an interactive animation.
     */
    case AuraLegacyPowerButton = "--aura-legacy-power-button";
    /**
     * Allowlist for Negotiate Auth servers.
     * Potential parameters: see description.
     */
    case AuthServerAllowlist = "--auth-server-allowlist";
    /**
     * Android authentication account type for SPNEGO authentication
     */
    case AuthSpnegoAccountType = "--auth-spnego-account-type";
    /**
     * The values the kTouchEventFeatureDetection switch may have, as in --touch-events=disabled. auto: enabled at startup when an attached touchscreen is present.
     * Potential parameters: see description.
     */
    case Auto = "--auto";
    /**
     * Automatically signs the user into Chrome when signing in to other Google services on the web. This makes it easier for automated browsers to sign in.
     */
    case AutoAcceptBrowserSigninForTests = "--auto-accept-browser-signin-for-tests";
    /**
     * Bypasses the dialog prompting the user for permission to capture cameras and microphones. Useful in automatic tests of video-conferencing Web applications. This is nearly identical to kUseFakeUIForMediaStream, with the exception being that this flag does NOT affect screen-capture.
     */
    case AutoAcceptCameraAndMicrophoneCapture = "--auto-accept-camera-and-microphone-capture";
    /**
     * These flags make Chrome auto-accept/reject requests to capture the current tab. It should only be used for tests.
     */
    case AutoAcceptThisTabCapture = "--auto-accept-this-tab-capture";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case AutofillApiKey = "--autofill-api-key";
    /**
     * Override the default autofill server URL with "scheme://host[:port]/prefix/".
     * Potential parameters: see description.
     */
    case AutofillServerUrl = "--autofill-server-url";
    /**
     * The number of days after which to reset the registry of autofill events for which an upload has been sent.
     * Potential parameters: see description.
     */
    case AutofillUploadThrottlingPeriodInDays = "--autofill-upload-throttling-period-in-days";
    /**
     * Skip the permission prompt for Captured Surface Control.
     */
    case AutoGrantCapturedSurfaceControlPrompt = "--auto-grant-captured-surface-control-prompt";
    /**
     * Automatically grants permission prompts for email verification for testing.
     */
    case AutoGrantEmailVerificationPermissionForTesting = "--auto-grant-email-verification-permission-for-testing";
    /**
     * This flag makes Chrome auto-open DevTools window for each tab. It is intended to be used by developers and automation to not require user interaction for opening DevTools.
     */
    case AutoOpenDevtoolsForTabs = "--auto-open-devtools-for-tabs";
    /**
     * Command line flag name to set the autoplay policy.
     * Potential parameters: see description.
     */
    case AutoplayPolicy = "--autoplay-policy";
    /**
     * This flag makes Chrome auto-reject requests capture a tab/window/screen.
     */
    case AutoRejectCapture = "--auto-reject-capture";
    /**
     * This flag makes Chrome auto-select the provided choice when an extension asks permission to start desktop capture. Should only be used for tests. For instance, --auto-select-desktop-capture-source="Entire screen" will automatically select sharing the entire screen in English locales. The switch value only needs to be substring of the capture sou...
     * Potential parameters: see description.
     */
    case AutoSelectDesktopCaptureSource = "--auto-select-desktop-capture-source";
    /**
     * This flag makes Chrome auto-select any screen when an extension asks permission to start desktop capture. Should only be used for tests. kAutoSelectDesktopCaptureSource (see above) can be also be used to auto-select screens. But it have the problem that you need to know the name of a screen to auto-select it. The name of screens can't be set, ar...
     */
    case AutoSelectScreenCaptureSource = "--auto-select-screen-capture-source";
    /**
     * This flag makes Chrome auto-select a tab with the provided title when the media-picker should otherwise be displayed to the user. This switch is very similar to kAutoSelectDesktopCaptureSource, but limits selection to tabs. This solves the issue of kAutoSelectDesktopCaptureSource being liable to accidentally capturing the Chromium window instead...
     */
    case AutoSelectTabCaptureSourceByTitle = "--auto-select-tab-capture-source-by-title";
    /**
     * This flag makes Chrome auto-select a window with the provided title when the media-picker should otherwise be displayed to the user. This switch is very similar to kAutoSelectDesktopCaptureSource, but limits selection to the window.
     */
    case AutoSelectWindowCaptureSourceByTitle = "--auto-select-window-capture-source-by-title";
    /**
     * The number of pixels from the start of a left swipe gesture to consider as a 'back' gesture.
     * Potential parameters: see description.
     */
    case BackGestureHorizontalThreshold = "--back-gesture-horizontal-threshold";
    /**
     * Configure the background threadpool field trial.
     */
    case BackgroundThreadPoolFieldTrial = "--background-thread-pool-field-trial";
    /**
     * Sets a local folder destination for tracing data. This is only used if kEnableBackgroundTracing is also specified.
     */
    case BackgroundTracingOutputPath = "--background-tracing-output-path";
    /**
     * Enables BIOD fake behavior. If the switch is set, fake biod D-Bus client is initialized and BIOD events do not reach chrome.
     */
    case BiodFake = "--biod-fake";
    /**
     * Sets the birch ranker to assume it is evening for birch chip ranking purposes.
     */
    case BirchIsEvening = "--birch-is-evening";
    /**
     * Sets the birch ranker to assume it is morning for birch chip ranking purposes.
     */
    case BirchIsMorning = "--birch-is-morning";
    /**
     * Set blink settings. Format is <name>[=<value],<name>[=<value>],... The names are declared in Settings.json5. For boolean type, use "true", "false", or omit '=<value>' part to set to true. For enum type, use the int value of the enum value. Applied after other command line flags and prefs.
     * Potential parameters: see description.
     */
    case BlinkSettings = "--blink-settings";
    /**
     * If true, then all pop-ups and calls to window.open will fail.
     */
    case BlockNewWebContents = "--block-new-web-contents";
    /**
     * Values for the kExtensionContentVerification flag. See ContentVerifierDelegate::Mode for more explanation.
     * Potential parameters: see description.
     */
    case Bootstrap = "--bootstrap";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case BorealisLaunchOptions = "--borealis-launch-options";
    /**
     * The number of pixels up from the bottom of the screen to consider as a valid origin for a bottom swipe gesture. If set, overrides the value of both the above system-gesture-start-height flag and the default value in cast_system_gesture_handler.cc.
     * Potential parameters: see description.
     */
    case BottomGestureStartHeight = "--bottom-gesture-start-height";
    /**
     * Specifies the user that the browser data backward migration should happen for.
     */
    case BrowserDataBackwardMigrationForUser = "--browser-data-backward-migration-for-user";
    /**
     * Backward migration mode. Passed with `kBrowserDataBackwardMigrationForUser`.
     */
    case BrowserDataBackwardMigrationMode = "--browser-data-backward-migration-mode";
    /**
     * Specifies the user that the browser data migration should happen for.
     */
    case BrowserDataMigrationForUser = "--browser-data-migration-for-user";
    /**
     * Run move migration instead of copy. Passed with `kBrowserDataMigrationForUser`.
     */
    case BrowserDataMigrationMode = "--browser-data-migration-mode";
    /**
     * Causes the browser process to display a dialog on launch.
     */
    case BrowserStartupDialog = "--browser-startup-dialog";
    /**
     * Path to the exe to run for the renderer and plugin subprocesses.
     * Potential parameters: see description.
     */
    case BrowserSubprocessPath = "--browser-subprocess-path";
    /**
     * Tells whether the code is running browser tests (this changes the startup URL used by the content shell and also disables features that can make tests flaky [like monitoring of memory pressure]).
     * Potential parameters: see description.
     */
    case BrowserTest = "--browser-test";
    /**
     * Causes tests to attempt to verify pixel output.
     */
    case BrowserUiTestsVerifyPixels = "--browser-ui-tests-verify-pixels";
    /**
     * Indicates that the browser is in "browse without sign-in" (Guest session) mode. Should completely disable extensions, sync and bookmarks.
     */
    case Bwsi = "--bwsi";
    /**
     * If specified, allows syncing multiple profiles to the same account. Used for multi-client E2E tests.
     */
    case BypassAccountAlreadyUsedByAnotherProfileCheck = "--bypass-account-already-used-by-another-profile-check";
    /**
     * Switch to control which serving campaigns file versions to select in test cohort. Example: `--campaigns-test-tag=dev1` will select test cohort which tag matches dev1.
     * Potential parameters: see description.
     */
    case CampaignsTestTag = "--campaigns-test-tag";
    /**
     * Enable in-progress canvas 2d API methods BeginLayer and EndLayer.
     */
    case Canvas2dLayers = "--canvas-2d-layers";
    /**
     * Background color used when Chromium hasn't rendered anything yet.
     */
    case CastAppBackgroundColor = "--cast-app-background-color";
    /**
     * Allows specifying the base::ASSETS dir for Cast via commandline.
     * Potential parameters: see description.
     */
    case CastAssetsDir = "--cast-assets-dir";
    /**
     * Specifies the Cast Core runtime ID, --cast-core-runtime-id=<runtime_id>.
     * Potential parameters: see description.
     */
    case CastCoreRuntimeId = "--cast-core-runtime-id";
    /**
     * Specifies the Cast Core service gRPC endpoint.
     */
    case CastCoreServiceEndpoint = "--cast-core-service-endpoint";
    /**
     * When enabled by build flags, passing this argument allows the Cast authentication utils to use a custom root developer certificate in the trust store instead of the root Google-signed cert.
     */
    case CastDeveloperCertificatePath = "--cast-developer-certificate-path";
    /**
     * No description…
     */
    case CastInitialScreenHeight = "--cast-initial-screen-height";
    /**
     * GPU process switches
     */
    case CastInitialScreenWidth = "--cast-initial-screen-width";
    /**
     * When enabled, prints a PEM-encoded the device certificate chain at VLOG level 3.
     */
    case CastLogDeviceCertChain = "--cast-log-device-cert-chain";
    /**
     * If enabled, overrides the target playout delay for a casting mirroring session. The value will be parsed as milliseconds. Lowering this value will result in a lower end to end latency, but could come at the cost of other quality standards such as dropped frames or FPS.
     * Potential parameters: see description.
     */
    case CastMirroringTargetPlayoutDelay = "--cast-mirroring-target-playout-delay";
    /**
     * Command-line arg to change the Unix domain socket path to connect to the Cast Mojo broker.
     * Potential parameters: see description.
     */
    case CastMojoBrokerPath = "--cast-mojo-broker-path";
    /**
     * NOTE: callers should always use the free functions in /media/cast/encoding/encoding_support.h instead of accessing these features directly.
     */
    case CastStreamingForceDisableHardwareAv1 = "--cast-streaming-force-disable-hardware-av1";
    /**
     * If enabled, completely disables use of H264 hardware encoding for Cast Streaming sessions. Takes precedence over kCastStreamingForceEnableHardwareH264.
     */
    case CastStreamingForceDisableHardwareH264 = "--cast-streaming-force-disable-hardware-h264";
    /**
     * If enabled, completely disables use of HEVC hardware encoding for Cast Streaming sessions. Takes precedence over kCastStreamingForceEnableHardwareHevc.
     */
    case CastStreamingForceDisableHardwareHevc = "--cast-streaming-force-disable-hardware-hevc";
    /**
     * If enabled, completely disables use of VP8 hardware encoding for Cast Streaming sessions. Takes precedence over kCastStreamingForceEnableHardwareVp8.
     */
    case CastStreamingForceDisableHardwareVp8 = "--cast-streaming-force-disable-hardware-vp8";
    /**
     * If enabled, completely disables use of VP9 hardware encoding for Cast Streaming sessions. Takes precedence over kCastStreamingForceEnableHardwareVp9.
     */
    case CastStreamingForceDisableHardwareVp9 = "--cast-streaming-force-disable-hardware-vp9";
    /**
     * If enabled, allows use of AV1 hardware encoding for Cast Streaming sessions, even on platforms where it is disabled due to performance and reliability issues. kCastStreamingForceDisableHardwareAv1 must be disabled for this flag to take effect.
     */
    case CastStreamingForceEnableHardwareAv1 = "--cast-streaming-force-enable-hardware-av1";
    /**
     * If enabled, allows use of H264 hardware encoding for Cast Streaming sessions, even on platforms where it is disabled due to performance and reliability issues. kCastStreamingForceDisableHardwareH264 must be disabled for this flag to take effect.
     */
    case CastStreamingForceEnableHardwareH264 = "--cast-streaming-force-enable-hardware-h264";
    /**
     * If enabled, allows use of HEVC hardware encoding for Cast Streaming sessions, even on platforms where it is disabled due to performance and reliability issues. kCastStreamingForceDisableHardwareHevc must be disabled for this flag to take effect.
     */
    case CastStreamingForceEnableHardwareHevc = "--cast-streaming-force-enable-hardware-hevc";
    /**
     * If enabled, allows use of VP8 hardware encoding for Cast Streaming sessions, even on platforms where it is disabled due to performance and reliability issues. kCastStreamingForceDisableHardwareVp8 must be disabled for this flag to take effect.
     */
    case CastStreamingForceEnableHardwareVp8 = "--cast-streaming-force-enable-hardware-vp8";
    /**
     * If enabled, allows use of VP9 hardware encoding for Cast Streaming sessions, even on platforms where it is disabled due to performance and reliability issues. kCastStreamingForceDisableHardwareVp9 must be disabled for this flag to take effect.
     */
    case CastStreamingForceEnableHardwareVp9 = "--cast-streaming-force-enable-hardware-vp9";
    /**
     * If set, allows to use a specific UDP port for Cast Streaming sessions on the receiver side. Otherwise the Cast Streaming receiver is using a random system port.
     */
    case CastStreamingReceiverPort = "--cast-streaming-receiver-port";
    /**
     * Increases timeout for memory checkers.
     */
    case CcLayerTreeTestLongTimeout = "--cc-layer-tree-test-long-timeout";
    /**
     * Test related.
     */
    case CcLayerTreeTestNoTimeout = "--cc-layer-tree-test-no-timeout";
    /**
     * Controls the duration of the scroll animation curve.
     */
    case CcScrollAnimationDurationInSeconds = "--cc-scroll-animation-duration-in-seconds";
    /**
     * Data directory to be used for CDM user data.
     */
    case CdmDataDirectory = "--cdm-data-directory";
    /**
     * Quota to apply to the CDM user data directory, in bytes.
     */
    case CdmDataQuotaBytes = "--cdm-data-quota-bytes";
    /**
     * If this flag is set, it indicates that this device is a "Cellular First" device. Cellular First devices use cellular telephone data networks as their primary means of connecting to the internet. Setting this flag has two consequences: 1. Cellular data roaming will be enabled by default. 2. UpdateEngine will be instructed to allow auto-updating o...
     */
    case CellularFirst = "--cellular-first";
    /**
     * After a zygote forks a new process, change the stack canary. This switch is useful so not all forked processes use the same canary (a secret value), which can be vulnerable to information leaks and brute force attacks. See https://crbug.com/1206626. This requires that all functions on the stack at the time content::RunZygote() is called be compi...
     * Potential parameters: see description.
     */
    case ChangeStackGuardOnFork = "--change-stack-guard-on-fork";
    /**
     * Checks damage early and aborts the frame if no damage, so that clients like Android WebView don't invalidate unnecessarily.
     */
    case CheckDamageEarly = "--check-damage-early";
    /**
     * How often (in seconds) to check for updates. Should only be used for testing purposes.
     */
    case CheckForUpdateInterval = "--check-for-update-interval";
    /**
     * The version for the staged child module.
     */
    case ChildModuleVersion = "--child-module-version";
    /**
     * Default large wallpaper to use for kids accounts (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case ChildWallpaperLarge = "--child-wallpaper-large";
    /**
     * Default small wallpaper to use for kids accounts (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case ChildWallpaperSmall = "--child-wallpaper-small";
    /**
     * Specifies the path to the Chrome for Testing configuration file.
     * Potential parameters: see description.
     */
    case ChromeForTestingConfig = "--chrome-for-testing-config";
    /**
     * Comma-separated list of SSL cipher suites to disable.
     * Potential parameters: see description.
     */
    case CipherSuiteBlacklist = "--cipher-suite-blacklist";
    /**
     * Values for the kAshUiMode flag.
     * Potential parameters: see description.
     */
    case Clamshell = "--clamshell";
    /**
     * The same as the --class argument in X applications. Overrides the WM_CLASS window property with the given value.
     * Potential parameters: see description.
     */
    case Class_ = "--class";
    /**
     * Specifies the path to the Clear Key CDM for testing, which is necessary to support External Clear Key key system when library CDM is enabled. Note that External Clear Key key system support is also controlled by feature kExternalClearKeyForTesting.
     * Potential parameters: see description.
     */
    case ClearKeyCdmPathForTesting = "--clear-key-cdm-path-for-testing";
    /**
     * Clears the token service before using it. This allows simulating the expiration of credentials during testing.
     */
    case ClearTokenService = "--clear-token-service";
    /**
     * A process type (switches::kProcessType) that cleans up the browser's temporary code sign clone.
     */
    case CodeSignCloneCleanup = "--code-sign-clone-cleanup";
    /**
     * Start the GPU process for Dawn info collection immediately after the browser starts. The default is to delay for 120 seconds.
     */
    case CollectDawnInfoEagerly = "--collect-dawn-info-eagerly";
    /**
     * Enable compensation for unstable pinch zoom. Some touch screens display significant amount of wobble when moving a finger in a straight line. This makes two finger scroll trigger an oscillating pinch zoom. See crbug.com/394380 for details.
     */
    case CompensateForUnstablePinchZoom = "--compensate-for-unstable-pinch-zoom";
    /**
     * Always return success when compiling a shader. Linking will still fail.
     */
    case CompileShaderAlwaysSucceeds = "--compile-shader-always-succeeds";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case ComponentUpdater = "--component-updater";
    /**
     * Optional testing override of the Trust Tokens key commitment component's path.
     * Potential parameters: see description.
     */
    case ComponentUpdaterTrustTokensComponentPath = "--component-updater-trust-tokens-component-path";
    /**
     * Url for network connectivity checking. Default is "https://clients3.google.com/generate_204".
     * Potential parameters: see description.
     */
    case ConnectivityCheckUrl = "--connectivity-check-url";
    /**
     * Hides toolbar from content_shell's host window.
     */
    case ContentShellHideToolbar = "--content-shell-hide-toolbar";
    /**
     * Size for the content_shell's host window (i.e. "800x600").
     */
    case ContentShellHostWindowSize = "--content-shell-host-window-size";
    /**
     * Used to tell the WebEngine executable to run the ContextProvider service.
     */
    case ContextProvider = "--context-provider";
    /**
     * Specifies a comma-separated list of HTTP headers to exempt from CORS checks.
     * Potential parameters: see description.
     */
    case CorsExemptHeaders = "--cors-exempt-headers";
    /**
     * The directory Crashpad should store minidumps in. iOS and tvOS default to app's cache directory.
     */
    case CrashDumpsDir = "--crash-dumps-dir";
    /**
     * A time_t. Passed by session_manager into the Chrome user session, indicating that if Chrome crashes before the indicated time, session_manager will consider this to be a crash-loop situation and log the user out. Chrome mostly just passes this to crash_reporter if it crashes.
     */
    case CrashLoopBefore = "--crash-loop-before";
    /**
     * When specified to "enable-leak-detection" command-line option, causes the leak detector to cause immediate crash when found leak.
     * Potential parameters: see description.
     */
    case CrashOnFailure = "--crash-on-failure";
    /**
     * A process type (switches::kProcessType) that indicates chrome.exe or setup.exe is being launched as crashpad_handler. This is only used on Windows. We bundle the handler into chrome.exe on Windows because there is high probability of a "new" .exe being blocked or interfered with by application firewalls, AV software, etc. On other platforms, cra...
     */
    case CrashpadHandler = "--crashpad-handler";
    /**
     * The process ID of the Crashpad handler.
     */
    case CrashpadHandlerPid = "--crashpad-handler-pid";
    /**
     * Switches for crash_uploader
     */
    case CrashServerUrl = "--crash-server-url";
    /**
     * Causes the browser process to crash on startup.
     */
    case CrashTest = "--crash-test";
    /**
     * Some platforms like ChromeOS default to empty desktop. Browser tests may need to add this switch so that at least one browser instance is created on startup.
     */
    case CreateBrowserOnStartupForTests = "--create-browser-on-startup-for-tests";
    /**
     * If provided with kProfileEmail, prompts the user to create a new profile with kProfileEmail as the email address if that email is not found in any existing profile.
     */
    case CreateProfileEmailIfNotExists = "--create-profile-email-if-not-exists";
    /**
     * Prints licensing information (same content as found in about:credits) and quits.
     */
    case Credits = "--credits";
    /**
     * Enables cros disks fake behavior. If the switch is set, fake cros disk D-Bus client is initialized and USB events do not reach chrome.
     */
    case CrosDisksFake = "--cros-disks-fake";
    /**
     * Custom crosh command.
     * Potential parameters: see description.
     */
    case CroshCommand = "--crosh-command";
    /**
     * Forces CrOS region value.
     * Potential parameters: see description.
     */
    case CrosRegion = "--cros-region";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case CryptauthHttpHost = "--cryptauth-http-host";
    /**
     * Overrides the default URL for CryptAuth v2 DeviceSync: https://cryptauthdevicesync.googleapis.com.
     * Potential parameters: see description.
     */
    case CryptauthV2DevicesyncHttpHost = "--cryptauth-v2-devicesync-http-host";
    /**
     * Overrides the default URL for CryptAuth v2 Enrollment: https://cryptauthenrollment.googleapis.com.
     * Potential parameters: see description.
     */
    case CryptauthV2EnrollmentHttpHost = "--cryptauth-v2-enrollment-http-host";
    /**
     * Normally the cryptohome without any any authentication factors is considered corrupted. Special mechanism would detect such situation during user creation and remove such users. If such user is an owner the power wash should be triggered instead. However, if such event happens in tests, all logs would be lost, and it would be difficult to invest...
     */
    case CryptohomeIgnoreCleanupOwnershipForTesting = "--cryptohome-ignore-cleanup-ownership-for-testing";
    /**
     * Overrides the base url for the Cryptohome recovery service.
     * Potential parameters: see description.
     */
    case CryptohomeRecoveryServiceBaseUrl = "--cryptohome-recovery-service-base-url";
    /**
     * Forces cryptohome recovery process to use test environment (test keys / URLs).
     * Potential parameters: see description.
     */
    case CryptohomeRecoveryUseTestEnv = "--cryptohome-recovery-use-test-env";
    /**
     * Controls if AuthSession API should be used when interacting with cryptohomed.
     */
    case CryptohomeUseAuthsession = "--cryptohome-use-authsession";
    /**
     * Forces cryptohome to create new users using old (ecryptfs) encryption. This switch can be used to set up configurations that can be used to test encryption migration scenarios.
     */
    case CryptohomeUseOldEncryptionForTesting = "--cryptohome-use-old-encryption-for-testing";
    /**
     * Command-line flag that can be used to write extracted CSD features to disk. This is also enables a few other behaviors that are useful for debugging.
     * Potential parameters: see description.
     */
    case CsdDebugFeatureDirectory = "--csd-debug-feature-directory";
    /**
     * Command-line flag that can be used to override the current CSD model. Must be provided with an absolute path.
     * Potential parameters: see description.
     */
    case CsdModelOverridePath = "--csd-model-override-path";
    /**
     * When specified with a url string as parameter, the given url overrides the Android Messages for Web PWA installation and app urls using a base of the given domain with approrpiate suffixes.
     * Potential parameters: see description.
     */
    case CustomAndroidMessagesDomain = "--custom-android-messages-domain";
    /**
     * Specifies the http:// endpoint which will be used to serve devtools://devtools/custom/<path> Or a file:// URL to specify a custom file path to load from for devtools://devtools/bundled/<path>
     * Potential parameters: see description.
     */
    case CustomDevtoolsFrontend = "--custom-devtools-frontend";
    /**
     * Forces a custom summary to be displayed below the update menu item.
     */
    case CustomSummary = "--custom_summary";
    /**
     * Switch to enable daemon-mode in crash_uploader.
     */
    case Daemon = "--daemon";
    /**
     * Sets dark mode settings. Format is [<param>=<value>],[<param>=<value>],... The params take either int or float values. If params are not specified, the default dark mode settings is used. Valid params are given below. "InversionAlgorithm" takes int value of DarkModeInversionAlgorithm enum. "ImagePolicy" takes int value of DarkModeImagePolicy enu...
     * Potential parameters: see description.
     */
    case DarkModeSettings = "--dark-mode-settings";
    /**
     * Soft quota to apply to the Context's persistent data directory, in bytes.
     */
    case DataQuotaBytes = "--data-quota-bytes";
    /**
     * Overrides data: URLs in SVGUseElement deprecation through enterprise policy.
     * Potential parameters: see description.
     */
    case DataUrlInSvgUseEnabled = "--data-url-in-svg-use-enabled";
    /**
     * Forces the stub implementation of D-Bus clients. Using stub D-Bus clients is the default for non-Chrome OS environment, to use real D-Bus clients in non-Chrome OS environment, set this flag to "never".
     */
    case DbusStub = "--dbus-stub";
    /**
     * Keep list in alphabetical order.
     * Potential parameters: see description.
     */
    case DeadlineToSynchronizeSurfaces = "--deadline-to-synchronize-surfaces";
    /**
     * Override and enable features useful for BSA library testing/debugging.
     */
    case DebugBsa = "--debug-bsa";
    /**
     * Run devtools tests in debug mode (not bundled and minified)
     */
    case DebugDevtools = "--debug-devtools";
    /**
     * Adds debugging entries such as Inspect Element to context menus of packed apps.
     */
    case DebugPackedApps = "--debug-packed-apps";
    /**
     * Enables support to debug printing subsystem.
     */
    case DebugPrint = "--debug-print";
    /**
     * The background color to be used if the page doesn't specify one. Provided as RGB or RGBA integer value in hex, e.g. 'ff0000ff' for red or '00000000' for transparent.
     * Potential parameters: see description.
     */
    case DefaultBackgroundColor = "--default-background-color";
    /**
     * Default country code to be used for search engine localization.
     */
    case DefaultCountryCode = "--default-country-code";
    /**
     * Special value for the `kSearchEngineChoiceCountry` command-line flag. Enables the Waffle program and overrides the list of search engines to display the default set.
     * Potential parameters: see description.
     */
    case DefaultEea = "--DEFAULT_EEA";
    /**
     * No description…
     */
    case DefaultTileHeight = "--default-tile-height";
    /**
     * Sets the tile size used by composited layers.
     */
    case DefaultTileWidth = "--default-tile-width";
    /**
     * This is only used when we did not set buffer size in trace config and will be used for all trace sessions. If not provided, we will use the default value provided in perfetto_config.cc
     * Potential parameters: see description.
     */
    case DefaultTraceBufferSizeLimitInKb = "--default-trace-buffer-size-limit-in-kb";
    /**
     * Indicates that the wallpaper images specified by kAshDefaultWallpaper{Large,Small} are OEM-specific (i.e. they are not downloadable from Google).
     */
    case DefaultWallpaperIsOem = "--default-wallpaper-is-oem";
    /**
     * Default large wallpaper to use (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case DefaultWallpaperLarge = "--default-wallpaper-large";
    /**
     * Default small wallpaper to use (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case DefaultWallpaperSmall = "--default-wallpaper-small";
    /**
     * Interval in seconds to wait for a display to reconnect while unlocking or logging in with a closed lid.
     */
    case DeferExternalDisplayTimeout = "--defer-external-display-timeout";
    /**
     * Switches for Cast browser decoupling.
     */
    case DeferFeatureList = "--defer-feature-list";
    /**
     * Force the use of a Delegated Ink renderer as specified by the command line argument, rather than using system details. Acceptable values are: skia, system, none. Default to skia.
     * Potential parameters: see description.
     */
    case DelegatedInkRenderer = "--delegated-ink-renderer";
    /**
     * Switch to control which serving demo mode app versions to select in test cohort. Example: `--demo-app-test-tag=dev1` will select test cohort which tag matches dev1.
     * Potential parameters: see description.
     */
    case DemoAppTestTag = "--demo-app-test-tag";
    /**
     * Test Organization Unit (OU) user to use for demo mode. Only pass the part before "@cros-demo-mode.com".
     */
    case DemoModeEnrollingUsername = "--demo-mode-enrolling-username";
    /**
     * Force ARC provision to take code path for offline demo mode.
     * Potential parameters: see description.
     */
    case DemoModeForceArcOfflineProvision = "--demo-mode-force-arc-offline-provision";
    /**
     * App ID to use for highlights app in demo mode.
     */
    case DemoModeHighlightsExtension = "--demo-mode-highlights-extension";
    /**
     * Directory from which to fetch the demo mode resource content (instead of downloading from Omaha).
     */
    case DemoModeResourceDirectory = "--demo-mode-resource-directory";
    /**
     * App ID to use for screensaver app in demo mode.
     */
    case DemoModeScreensaverExtension = "--demo-mode-screensaver-extension";
    /**
     * API key for demo mode server.
     */
    case DemoModeServerApiKey = "--demo-mode-server-api-key";
    /**
     * Override the prodution demo mode api url fo demo account sign in.
     * Potential parameters: see description.
     */
    case DemoModeServerUrl = "--demo-mode-server-url";
    /**
     * Directory from which to fetch the demo mode SWA content (instead of downloading from Omaha).
     */
    case DemoModeSwaContentDirectory = "--demo-mode-swa-content-directory";
    /**
     * Prevents permission prompts from appearing by denying instead of showing prompts.
     */
    case DenyPermissionPrompts = "--deny-permission-prompts";
    /**
     * Time in seconds before a machine at OOBE is considered derelict.
     */
    case DerelictDetectionTimeout = "--derelict-detection-timeout";
    /**
     * Time in seconds before a derelict machines starts demo mode.
     */
    case DerelictIdleTimeout = "--derelict-idle-timeout";
    /**
     * Graphics switches
     */
    case DesktopWindow1080p = "--desktop-window-1080p";
    /**
     * A meta flag. This sets a number of flags which put the browser into deterministic mode where begin frames should be issued over DevToolsProtocol (experimental).
     * Potential parameters: see description.
     */
    case DeterministicMode = "--deterministic-mode";
    /**
     * Specifies the URL at which to communicate with the device management backend to fetch configuration policies and perform other device tasks.
     * Potential parameters: see description.
     */
    case DeviceManagementUrl = "--device-management-url";
    /**
     * This switch contains the device scale factor passed to certain processes like renderers, etc.
     */
    case DeviceScaleFactor = "--device-scale-factor";
    /**
     * Directory to output JavaScript code coverage. When supplied enables coverage in selected browser tests.
     */
    case DevtoolsCodeCoverage = "--devtools-code-coverage";
    /**
     * Passes command line parameters to the DevTools front-end.
     * Potential parameters: see description.
     */
    case DevtoolsFlags = "--devtools-flags";
    /**
     * Specifies a stringified JSON dictionary defining allowlist and blocklist pattern rules for DevTools-controlled navigations. If an allowlist is provided (even if empty), all top-level navigations to non-matching URLs are blocked. If both allowlist and blocklist match a URL, the more specific pattern determines the outcome. Example: '{ \ "allowlis...
     * Potential parameters: see description.
     */
    case DevtoolsNavigationGatingRules = "--devtools-navigation-gating-rules";
    /**
     * Triggers a plethora of diagnostic modes.
     */
    case Diagnostics = "--diagnostics";
    /**
     * Sets the output format for diagnostic modes enabled by diagnostics flag.
     */
    case DiagnosticsFormat = "--diagnostics-format";
    /**
     * Tells the diagnostics mode to do the requested recovery step(s).
     */
    case DiagnosticsRecovery = "--diagnostics-recovery";
    /**
     * Used for overriding the swap chain format for direct composition SDR video overlays.
     */
    case DirectCompositionVideoSwapChainFormat = "--direct-composition-video-swap-chain-format";
    /**
     * Disable antialiasing on 2d canvas clips
     */
    case Disable2dCanvasClipAa = "--disable-2d-canvas-clip-aa";
    /**
     * Disables client-visible 3D APIs, in particular WebGL. This is controlled by policy and is kept separate from the other enable/disable switches to avoid accidentally regressing the policy support for controlling access to these APIs.
     */
    case Disable3dApis = "--disable-3d-apis";
    /**
     * Disable gpu-accelerated 2d canvas.
     */
    case DisableAccelerated2dCanvas = "--disable-accelerated-2d-canvas";
    /**
     * Disable hardware acceleration of mjpeg decode for captured frame, where available.
     */
    case DisableAcceleratedMjpegDecode = "--disable-accelerated-mjpeg-decode";
    /**
     * Disables hardware acceleration of video decode, where available. Warning: do not remove or rename this flag, as it is used inside ChromeOS code to implement the DeviceHardwareVideoDecodingEnabled policy.
     */
    case DisableAcceleratedVideoDecode = "--disable-accelerated-video-decode";
    /**
     * Disables hardware acceleration of video encode, where available.
     */
    case DisableAcceleratedVideoEncode = "--disable-accelerated-video-encode";
    /**
     * Bypasses several of the actor's safety checks, such as requiring SafeBrowsing to be enabled and the blocklist. Note that some checks, like requiring https, are not affected by this.
     * Potential parameters: see description.
     */
    case DisableActorSafetyChecks = "--disable-actor-safety-checks";
    /**
     * Disables reporting of frame timing via ADPF, even if supported on the device.
     */
    case DisableAdpf = "--disable-adpf";
    /**
     * On some Android emulators with software GL, ANGLE is exposing the native fence sync extension but it doesn't actually work. This switch is used to disable the Android native fence sync during test to avoid crashes.
     */
    case DisableAndroidNativeFenceSyncForTesting = "--disable-android-native-fence-sync-for-testing";
    /**
     * Disables specified comma separated ANGLE features if found.
     * Potential parameters: see description.
     */
    case DisableAngleFeatures = "--disable-angle-features";
    /**
     * Whether to disable app content verification when testing changes locally on Chromebox for Meetings hardware.
     */
    case DisableAppContentVerification = "--disable-app-content-verification";
    /**
     * Prevents any CPU restrictions being set on ARC[VM]. Only meant to be used by tests as some tests may time out if the ARC container is throttled.
     */
    case DisableArcCpuRestriction = "--disable-arc-cpu-restriction";
    /**
     * Disables ARC Opt-in verification process and ARC is enabled by default.
     */
    case DisableArcOptInVerification = "--disable-arc-opt-in-verification";
    /**
     * Forces input and output stream creation to use fake audio streams.
     */
    case DisableAudioInput = "--disable-audio-input";
    /**
     * No description…
     */
    case DisableAudioOutput = "--disable-audio-output";
    /**
     * Disables the auto maximize feature on ChromeOS so that a browser window always starts in normal state. This is used by tests that do not want this auto maximizing behavior.
     */
    case DisableAutoMaximizeForTests = "--disable-auto-maximize-for-tests";
    /**
     * Disable auto-reload of pages on top-level error.
     */
    case DisableAutoReload = "--disable-auto-reload";
    /**
     * Disables the automatic origin isolation of web platform test domains. We normally origin-isolate them for better test coverage, but tests of opt-in origin isolation need to disable this.
     */
    case DisableAutoWptOriginIsolation = "--disable-auto-wpt-origin-isolation";
    /**
     * Disables the BackForwardCache feature.
     */
    case DisableBackForwardCache = "--disable-back-forward-cache";
    /**
     * No description…
     */
    case DisableBackForwardCacheForWebSockets = "--disable-back-forward-cache-for-web-sockets";
    /**
     * Disable backgrounding renders for occluded windows. Done for tests to avoid nondeterministic behavior.
     */
    case DisableBackgroundingOccludedWindows = "--disable-backgrounding-occluded-windows";
    /**
     * Do not immediately suspend media in background tabs.
     */
    case DisableBackgroundMediaSuspend = "--disable-background-media-suspend";
    /**
     * Disable several subsystems which run network requests in the background. This is for use when doing network performance testing to avoid noise in the measurements.
     */
    case DisableBackgroundNetworking = "--disable-background-networking";
    /**
     * Disable task throttling of timer tasks from background pages.
     */
    case DisableBackgroundTimerThrottling = "--disable-background-timer-throttling";
    /**
     * Disable limits on the number of backing stores. Can prevent blinking for users with many windows/tabs and lots of memory.
     * Potential parameters: see description.
     */
    case DisableBackingStoreLimit = "--disable-backing-store-limit";
    /**
     * Delays execution of TaskPriority::BEST_EFFORT tasks until shutdown.
     */
    case DisableBestEffortTasks = "--disable-best-effort-tasks";
    /**
     * Disables the Weather API from being called by Birch. Allows fake users in tast tests to avoid making API calls using an invalid GAIA ID, which causes errors on the weather server side.
     */
    case DisableBirchWeatherApiForTesting = "--disable-birch-weather-api-for-testing";
    /**
     * Disable one or more Blink runtime-enabled features. Use names from runtime_enabled_features.json5, separated by commas. Applied after kEnableBlinkFeatures, and after other flags that change these features.
     * Potential parameters: see description.
     */
    case DisableBlinkFeatures = "--disable-blink-features";
    /**
     * Toggles partitioning of Blob URLs through enterprise policy.
     * Potential parameters: see description.
     */
    case DisableBlobUrlPartitioning = "--disable-blob-url-partitioning";
    /**
     * Disables the crash reporting.
     */
    case DisableBreakpad = "--disable-breakpad";
    /**
     * Disable CancelAllTouches() function for the implementation on cancel single touches.
     */
    case DisableCancelAllTouches = "--disable-cancel-all-touches";
    /**
     * Disable antialiasing on 2d canvas.
     */
    case DisableCanvasAa = "--disable-canvas-aa";
    /**
     * Disabled defering all image decodes to the image decode service, ignoring DecodingMode preferences specified on PaintImage.
     */
    case DisableCheckerImaging = "--disable-checker-imaging";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case DisableChromeTracingComputation = "--disable-chrome-tracing-computation";
    /**
     * Disable default component extensions with background pages - useful for performance tests where these pages may interfere with perf results.
     */
    case DisableComponentExtensionsWithBackgroundPages = "--disable-component-extensions-with-background-pages";
    /**
     * No description…
     */
    case DisableComponentUpdate = "--disable-component-update";
    /**
     * Disables layer-edge anti-aliasing in the compositor.
     */
    case DisableCompositedAntialiasing = "--disable-composited-antialiasing";
    /**
     * Whether cookies stored as part of user profile are encrypted.
     */
    case DisableCookieEncryption = "--disable-cookie-encryption";
    /**
     * Disables crashing on JavaScript errors in component extensions. Used for development.
     */
    case DisableCrashOnComponentExtensionJsError = "--disable-crash-on-component-extension-js-error";
    /**
     * Disables crashpad initialization for testing. The crashpad binary will not run, and thus will not detect and symbolize crashes.
     */
    case DisableCrashpadForTesting = "--disable-crashpad-for-testing";
    /**
     * Disable Crash Reporting
     */
    case DisableCrashReporter = "--disable-crash-reporter";
    /**
     * disabled: touch events are disabled.
     */
    case Disabled = "--disabled";
    /**
     * Explicitly disable D3D11 WARP fallback. Some test suites prefer falling back to swiftshader.
     */
    case DisableD3d11Warp = "--disable-d3d11-warp";
    /**
     * Set the Dawn features(toggles) disabled on the creation of Dawn devices.
     */
    case DisableDawnFeatures = "--disable-dawn-features";
    /**
     * Disables installation of default apps on first run. This is used during automated testing.
     */
    case DisableDefaultApps = "--disable-default-apps";
    /**
     * Disable the default browser promo.
     */
    case DisableDefaultBrowserPromo = "--disable-default-browser-promo";
    /**
     * Disables the Chrome OS demo.
     */
    case DisableDemoMode = "--disable-demo-mode";
    /**
     * If this switch is set, the device cannot be remotely disabled by its owner.
     */
    case DisableDeviceDisabling = "--disable-device-disabling";
    /**
     * The /dev/shm partition is too small in certain VM environments, causing Chrome to fail or crash (see http://crbug.com/715363). Use this flag to work-around this issue (a temporary directory will always be used to create anonymous shared memory files).
     */
    case DisableDevShmUsage = "--disable-dev-shm-usage";
    /**
     * Disables the dinosaur easter egg on the offline interstitial.
     */
    case DisableDinosaurEasterEgg = "--disable-dinosaur-easter-egg";
    /**
     * Disable DirectComposition.
     */
    case DisableDirectComposition = "--disable-direct-composition";
    /**
     * Disable the per-domain blocking for 3D APIs after GPU reset. This switch is intended only for tests.
     */
    case DisableDomainBlockingFor3dApis = "--disable-domain-blocking-for-3d-apis";
    /**
     * Disables Domain Reliability Monitoring.
     */
    case DisableDomainReliability = "--disable-domain-reliability";
    /**
     * Disables DriveFS for testing purposes, used in tast testing and only on test images.
     */
    case DisableDriveFsForTesting = "--disable-drive-fs-for-testing";
    /**
     * Disable DumpWithoutCrashing on ANGLE portability messages. This should be used by GPU integration tests to avoid failures on bots.
     */
    case DisableDumpWithoutCrashingOnAnglePortabilityMessages = "--disable-dump-without-crashing-on-angle-portability-messages";
    /**
     * Disable explicit DMA-fences
     */
    case DisableExplicitDmaFences = "--disable-explicit-dma-fences";
    /**
     * Disables extensions.
     */
    case DisableExtensions = "--disable-extensions";
    /**
     * Disable extensions except those specified in a comma-separated list.
     * Potential parameters: see description.
     */
    case DisableExtensionsExcept = "--disable-extensions-except";
    /**
     * Disable checking for user opt-in for extensions that want to inject script into file URLs (ie, always allow it). This is used during automated testing.
     * Potential parameters: see description.
     */
    case DisableExtensionsFileAccessCheck = "--disable-extensions-file-access-check";
    /**
     * Disable the net::URLRequestThrottlerManager functionality for requests originating from extensions.
     * Potential parameters: see description.
     */
    case DisableExtensionsHttpThrottling = "--disable-extensions-http-throttling";
    /**
     * Comma-separated list of feature names to disable. See also kEnableFeatures.
     * Potential parameters: see description.
     */
    case DisableFeatures = "--disable-features";
    /**
     * Disable field trial tests configured in fieldtrial_testing_config.json.
     */
    case DisableFieldTrialConfig = "--disable-field-trial-config";
    /**
     * Disable FileSystem API.
     */
    case DisableFileSystem = "--disable-file-system";
    /**
     * Disables fine grained time zone detection.
     */
    case DisableFineGrainedTimeZoneDetection = "--disable-fine-grained-time-zone-detection";
    /**
     * Disables first-run UI from being shown.
     */
    case DisableFirstRunUi = "--disable-first-run-ui";
    /**
     * Force disables font subpixel positioning. This affects the character glyph sharpness, kerning, hinting and layout.
     */
    case DisableFontSubpixelPositioning = "--disable-font-subpixel-positioning";
    /**
     * Disables begin frame limiting in both cc scheduler and display scheduler. Also implies --disable-gpu-vsync (see //ui/gl/gl_switches.h).
     */
    case DisableFrameRateLimit = "--disable-frame-rate-limit";
    /**
     * Disables GAIA services such as enrollment and OAuth session restore. Used by 'fake' telemetry login.
     */
    case DisableGaiaServices = "--disable-gaia-services";
    /**
     * Disable user gesture requirement for presentation.
     */
    case DisableGestureRequirementForPresentation = "--disable-gesture-requirement-for-presentation";
    /**
     * These flags are used by the test harness code, not passed in by users.
     */
    case DisableGlDrawingForTests = "--disable-gl-drawing-for-tests";
    /**
     * Disable the GL error log limit.
     */
    case DisableGlErrorLimit = "--disable-gl-error-limit";
    /**
     * Disables specified comma separated GL Extensions if found.
     * Potential parameters: see description.
     */
    case DisableGlExtensions = "--disable-gl-extensions";
    /**
     * Disable the GLSL translator.
     */
    case DisableGlslTranslator = "--disable-glsl-translator";
    /**
     * Disables GPU hardware acceleration. If software renderer is not in place, then the GPU process won't launch.
     */
    case DisableGpu = "--disable-gpu";
    /**
     * Prevent the compositor from using its GPU implementation.
     */
    case DisableGpuCompositing = "--disable-gpu-compositing";
    /**
     * Disable workarounds for various GPU driver bugs.
     */
    case DisableGpuDriverBugWorkarounds = "--disable-gpu-driver-bug-workarounds";
    /**
     * Disable proactive early init of GPU process.
     */
    case DisableGpuEarlyInit = "--disable-gpu-early-init";
    /**
     * Do not force that all compositor resources be backed by GPU memory buffers.
     */
    case DisableGpuMemoryBufferCompositorResources = "--disable-gpu-memory-buffer-compositor-resources";
    /**
     * Disable GpuMemoryBuffer backed VideoFrames.
     */
    case DisableGpuMemoryBufferVideoFrames = "--disable-gpu-memory-buffer-video-frames";
    /**
     * For tests, to disable the limit on the number of times the GPU process may be restarted.
     * Potential parameters: see description.
     */
    case DisableGpuProcessCrashLimit = "--disable-gpu-process-crash-limit";
    /**
     * Disables the non-sandboxed GPU process for DX12 info collection
     */
    case DisableGpuProcessForDx12InfoCollection = "--disable-gpu-process-for-dx12-info-collection";
    /**
     * Turn off gpu program caching
     */
    case DisableGpuProgramCache = "--disable-gpu-program-cache";
    /**
     * Disable GPU rasterization, i.e. rasterize on the CPU only. Overrides the kEnableGpuRasterization flag.
     */
    case DisableGpuRasterization = "--disable-gpu-rasterization";
    /**
     * Disables the GPU process sandbox.
     */
    case DisableGpuSandbox = "--disable-gpu-sandbox";
    /**
     * Disables the GPU shader on disk cache.
     */
    case DisableGpuShaderDiskCache = "--disable-gpu-shader-disk-cache";
    /**
     * Stop the GPU from synchronizing presentation with vblank.
     */
    case DisableGpuVsync = "--disable-gpu-vsync";
    /**
     * Disable the thread that crashes the GPU process if it stops responding to messages.
     */
    case DisableGpuWatchdog = "--disable-gpu-watchdog";
    /**
     * Disables GTK IME integration.
     */
    case DisableGtkIme = "--disable-gtk-ime";
    /**
     * Suppresses hang monitor dialogs in renderer processes. This may allow slow unload handlers on a page to prevent the tab from closing, but the Task Manager can be used to terminate the offending process in this case.
     */
    case DisableHangMonitor = "--disable-hang-monitor";
    /**
     * Disables the shell from beginning in headless mode. Tests will then attempt to use the hardware GPU for rendering. This is only followed when kRunWebTests is set.
     */
    case DisableHeadlessMode = "--disable-headless-mode";
    /**
     * Disable the HID blocklist.
     * Potential parameters: see description.
     */
    case DisableHidBlocklist = "--disable-hid-blocklist";
    /**
     * Disables HID-detection OOBE screen.
     */
    case DisableHidDetectionOnOobe = "--disable-hid-detection-on-oobe";
    /**
     * Disable high-resolution timer on Windows.
     */
    case DisableHighresTimer = "--disable-highres-timer";
    /**
     * Disable the RenderThread's HistogramCustomizer.
     */
    case DisableHistogramCustomizer = "--disable-histogram-customizer";
    /**
     * No description…
     */
    case DisableHttp2GreaseSettings = "--disable-http2-grease-settings";
    /**
     * Disables the IgnoreDuplicateNavs feature. This prevent navigations from being unintentionally ignored in tests.
     */
    case DisableIgnoreDuplicateNavsForTesting = "--disable-ignore-duplicate-navs-for-testing";
    /**
     * Disallow image animations to be reset to the beginning to avoid skipping many frames. Only effective if compositor image animations are enabled.
     */
    case DisableImageAnimationResync = "--disable-image-animation-resync";
    /**
     * Disables the in-process stack traces.
     */
    case DisableInProcessStackTraces = "--disable-in-process-stack-traces";
    /**
     * Disables the disregarding of potentially unintended input events such as button clicks that happen instantly after the button is shown. Use this for integration tests that do automated clicks etc.
     */
    case DisableInputEventActivationProtection = "--disable-input-event-activation-protection";
    /**
     * Disable showing available password credentials in the keyboard accessory view when focused on form fields.
     */
    case DisableIosPasswordSuggestions = "--disable-ios-password-suggestions";
    /**
     * Disables the IPC flooding protection. It is activated by default. Some javascript functions can be used to flood the browser process with IPC. This protection limits the rate at which they can be used.
     */
    case DisableIpcFloodingProtection = "--disable-ipc-flooding-protection";
    /**
     * Parameter to disable the Gemini Live IPH and New badge.
     */
    case DisableIph = "--disable_iph";
    /**
     * Disable latest shipping ECMAScript 6 features.
     */
    case DisableJavascriptHarmonyShipping = "--disable-javascript-harmony-shipping";
    /**
     * Don't kill a child process when it sends a bad IPC message. Apart from testing, it is a bad idea from a security perspective to enable this switch.
     */
    case DisableKillAfterBadIpc = "--disable-kill-after-bad-ipc";
    /**
     * Disables the Landlock sandbox (Android only).
     */
    case DisableLandlockSandbox = "--disable-landlock-sandbox";
    /**
     * Switches for LayerTreeHost.
     */
    case DisableLayerTreeHostMemoryPressure = "--disable-layer-tree-host-memory-pressure";
    /**
     * Disables lazy loading of images and frames.
     */
    case DisableLazyLoading = "--disable-lazy-loading";
    /**
     * Disables LCD text.
     */
    case DisableLcdText = "--disable-lcd-text";
    /**
     * Disable the Legacy Window which corresponds to the size of the WebContents.
     */
    case DisableLegacyWindow = "--disable-legacy-window";
    /**
     * Disable LocalStorage.
     */
    case DisableLocalStorage = "--disable-local-storage";
    /**
     * Force logging to be disabled. Logging is enabled by default in debug builds.
     */
    case DisableLogging = "--disable-logging";
    /**
     * Disables the redirect of console to /var/log/messages in ChromeOS.
     */
    case DisableLoggingRedirect = "--disable-logging-redirect";
    /**
     * Avoid doing expensive animations upon login.
     */
    case DisableLoginAnimations = "--disable-login-animations";
    /**
     * Disables apps on the login screen. By default, they are allowed and can be installed through policy.
     */
    case DisableLoginScreenApps = "--disable-login-screen-apps";
    /**
     * Force disabling of low-end device mode when set.
     */
    case DisableLowEndDeviceMode = "--disable-low-end-device-mode";
    /**
     * Disables using CODECAPI_AVLowLatencyMode when creating DXVA decoders.
     */
    case DisableLowLatencyDxva = "--disable-low-latency-dxva";
    /**
     * Disables requests for an enterprise machine certificate during attestation.
     */
    case DisableMachineCertRequest = "--disable-machine-cert-request";
    /**
     * Disables sending the next BeginMainFrame before the previous commit activates. Overrides the kEnableMainFrameBeforeActivation flag.
     */
    case DisableMainFrameBeforeActivation = "--disable-main-frame-before-activation";
    /**
     * Disables renaming the main browser thread to "CrBrowserMain" during browser startup. The internally mapped thread name is being emitted to Perfetto traces, which means that the main thread is identified as "CrBrowserMain" instead of the process name. Enabling this switch will prevent the thread from being named, which fixes the Perfetto trace is...
     */
    case DisableMainThreadNameOverride = "--disable-main-thread-name-override";
    /**
     * Disable Media Session API
     */
    case DisableMediaSessionApi = "--disable-media-session-api";
    /**
     * Disables Metal's shader cache, using the GPU sandbox to prevent access to it.
     */
    case DisableMetalShaderCache = "--disable-metal-shader-cache";
    /**
     * Disables mipmap generation in Skia. Used a workaround for select low memory devices, see https://crbug.com/1138979 for details.
     */
    case DisableMipmapGeneration = "--disable-mipmap-generation";
    /**
     * Disable animations for showing and hiding modal dialogs.
     */
    case DisableModalAnimations = "--disable-modal-animations";
    /**
     * Disables Mojo broker capabilities in the browser during Mojo initialization.
     */
    case DisableMojoBroker = "--disable-mojo-broker";
    /**
     * Rather than use the renderer hosted remotely in the media service, fall back to the default renderer within content_renderer. Does not change the behavior of the media service.
     */
    case DisableMojoRenderer = "--disable-mojo-renderer";
    /**
     * Disables usage of the namespace sandbox.
     */
    case DisableNamespaceSandbox = "--disable-namespace-sandbox";
    /**
     * Disables clearing the rendering output of a renderer when it didn't commit new output for a while after a top-frame navigation.
     */
    case DisableNewContentRenderingTimeout = "--disable-new-content-rendering-timeout";
    /**
     * Disables the Web Notification and the Push APIs.
     */
    case DisableNotifications = "--disable-notifications";
    /**
     * Disables the video decoder from drawing to an NV12 textures instead of ARGB.
     */
    case DisableNv12DxgiVideo = "--disable-nv12-dxgi-video";
    /**
     * Disables the ChromeVox hint idle detection in OOBE, which can lead to unexpected behavior during tests.
     */
    case DisableOobeChromevoxHintTimerForTesting = "--disable-oobe-chromevox-hint-timer-for-testing";
    /**
     * Disables network screen skip check which is based on ethernet connection.
     */
    case DisableOobeNetworkScreenSkippingForTesting = "--disable-oobe-network-screen-skipping-for-testing";
    /**
     * Disables debug crash dumps for OOPR.
     */
    case DisableOoprDebugCrashDump = "--disable-oopr-debug-crash-dump";
    /**
     * Disables all RuntimeEnabledFeatures that can be enabled via OriginTrials.
     */
    case DisableOriginTrialControlledBlinkFeatures = "--disable-origin-trial-controlled-blink-features";
    /**
     * Disable overscroll edge effects like those found in Android views.
     */
    case DisableOverscrollEdgeEffect = "--disable-overscroll-edge-effect";
    /**
     * Disable partial raster in the renderer. Disabling this switch also disables the use of persistent gpu memory buffers.
     */
    case DisablePartialRaster = "--disable-partial-raster";
    /**
     * Do not emit tags when printing PDFs.
     */
    case DisablePdfTagging = "--disable-pdf-tagging";
    /**
     * Disables per-user timezone.
     */
    case DisablePerUserTimezone = "--disable-per-user-timezone";
    /**
     * Disables compositor-accelerated touch-screen pinch gestures.
     */
    case DisablePinch = "--disable-pinch";
    /**
     * Disables the activation of browser and web accessibility via interactions with the platform's accessibility integration (i.e., a screenreader will not be able to function with the browser).
     */
    case DisablePlatformAccessibilityIntegration = "--disable-platform-accessibility-integration";
    /**
     * Disables the verification of policy signing keys. It just works on Chrome OS test images and crashes otherwise.
     */
    case DisablePolicyKeyVerification = "--disable-policy-key-verification";
    /**
     * If set, the power button in tablet mode is disabled.
     */
    case DisablePowerButtonInTabletMode = "--disable-power-button-in-tablet-mode";
    /**
     * Disable the creation of compositing layers when it would prevent LCD text.
     */
    case DisablePreferCompositingToLcdText = "--disable-prefer-compositing-to-lcd-text";
    /**
     * Disables the Presentation API.
     */
    case DisablePresentationApi = "--disable-presentation-api";
    /**
     * Disables print preview (For testing, and for users who don't like us. :[ )
     */
    case DisablePrintPreview = "--disable-print-preview";
    /**
     * Normally when the user attempts to navigate to a page that was the result of a post we prompt to make sure they want to. This switch may be used to disable that check. This switch is used during automated testing.
     */
    case DisablePromptOnRepost = "--disable-prompt-on-repost";
    /**
     * Disable the pull-to-refresh effect when vertically overscrolling content.
     */
    case DisablePullToRefreshEffect = "--disable-pull-to-refresh-effect";
    /**
     * Disables throttling of history.pushState/replaceState calls.
     */
    case DisablePushstateThrottle = "--disable-pushstate-throttle";
    /**
     * Taints all <canvas> elements, regardless of origin.
     */
    case DisableReadingFromCanvas = "--disable-reading-from-canvas";
    /**
     * Disables remote web font support. SVG font should always work whether this option is specified or not.
     */
    case DisableRemoteFonts = "--disable-remote-fonts";
    /**
     * Disables the RemotePlayback API.
     */
    case DisableRemotePlaybackApi = "--disable-remote-playback-api";
    /**
     * Turns off the accessibility in the renderer.
     */
    case DisableRendererAccessibility = "--disable-renderer-accessibility";
    /**
     * Prevent renderer process backgrounding when set. Renderer processes keep a foreground priority at the OS level, and renderers are never told that they are backgrounded or hidden. The browser still computes each renderer process's priority as usual (e.g. RenderProcessHost::GetPriority()), so that tests can verify the priority policy without being...
     */
    case DisableRendererBackgrounding = "--disable-renderer-backgrounding";
    /**
     * Whether the ResourceScheduler is disabled. Note this is only useful for C++ Headless embedders who need to implement their own resource scheduling.
     */
    case DisableResourceScheduler = "--disable-resource-scheduler";
    /**
     * Disables RGBA_4444 textures.
     */
    case DisableRgba4444Textures = "--disable-rgba-4444-textures";
    /**
     * Disables rollback option on reset screen.
     */
    case DisableRollbackOption = "--disable-rollback-option";
    /**
     * Disables the new rendering algorithm for webrtc, which is designed to improve the rendering smoothness.
     */
    case DisableRtcSmoothnessAlgorithm = "--disable-rtc-smoothness-algorithm";
    /**
     * Disable the locking feature of the screen orientation API.
     */
    case DisableScreenOrientationLock = "--disable-screen-orientation-lock";
    /**
     * This switch disables the ScrollToTextFragment feature.
     */
    case DisableScrollToTextFragment = "--disable-scroll-to-text-fragment";
    /**
     * Disable the search engine choice screen for testing / autmation.
     */
    case DisableSearchEngineChoiceScreen = "--disable-search-engine-choice-screen";
    /**
     * Disable the seccomp filter sandbox (seccomp-bpf) (Linux only).
     */
    case DisableSeccompFilterSandbox = "--disable-seccomp-filter-sandbox";
    /**
     * Disable the setuid sandbox (Linux only).
     */
    case DisableSetuidSandbox = "--disable-setuid-sandbox";
    /**
     * Turn off user-defined name hashing in shaders.
     */
    case DisableShaderNameHashing = "--disable-shader-name-hashing";
    /**
     * The switch to disable the shared dictionary storage clean up task. Only for testing.
     */
    case DisableSharedDictionaryStorageCleanupForTesting = "--disable-shared-dictionary-storage-cleanup-for-testing";
    /**
     * Disable shared workers.
     */
    case DisableSharedWorkers = "--disable-shared-workers";
    /**
     * Disables the sign-in promo on the avatar pill for tests by default, as it has impact on the startup behavior. Tests that need to test this specific behavior needs to explicitly enable it.
     */
    case DisableSigninPromoOnAvatarPillForTesting = "--disable-signin-promo-on-avatar-pill-for-testing";
    /**
     * Just like kDisableSiteIsolation, but doesn't show the "stability and security will suffer" butter bar warning.
     */
    case DisableSiteIsolationForPolicy = "--disable-site-isolation-for-policy";
    /**
     * Disables site isolation. Note that the opt-in (to site-per-process, isolate-origins, etc.) via enterprise policy and/or cmdline takes precedence over the kDisableSiteIsolation switch (i.e. the opt-in takes effect despite potential presence of kDisableSiteIsolation switch). Note that for historic reasons the name of the switch misleadingly mentio...
     */
    case DisableSiteIsolationTrials = "--disable-site-isolation-trials";
    /**
     * Force disabling/enabling Skia Graphite. Disabling will take precedence over enabling if both are specified.
     */
    case DisableSkiaGraphite = "--disable-skia-graphite";
    /**
     * Force disabling/enabling Skia Graphite's Pipeline Precompilation. Disabling will take precedence over enabling if both are specified.
     */
    case DisableSkiaGraphitePrecompilation = "--disable-skia-graphite-precompilation";
    /**
     * Do not use runtime-detected high-end CPU optimizations in Skia. This is useful for forcing a baseline code path for e.g. web tests.
     * Potential parameters: see description.
     */
    case DisableSkiaRuntimeOpts = "--disable-skia-runtime-opts";
    /**
     * Disable smooth scrolling for testing.
     */
    case DisableSmoothScrolling = "--disable-smooth-scrolling";
    /**
     * For tests, to disable falling back to software compositing if the GPU Process has crashed, and reached the GPU Process crash limit.
     */
    case DisableSoftwareCompositingFallback = "--disable-software-compositing-fallback";
    /**
     * Disables the use of a 3D software rasterizer.
     */
    case DisableSoftwareRasterizer = "--disable-software-rasterizer";
    /**
     * Disables the Web Speech API (both speech recognition and synthesis).
     */
    case DisableSpeechApi = "--disable-speech-api";
    /**
     * Disables the speech synthesis part of Web Speech API.
     */
    case DisableSpeechSynthesisApi = "--disable-speech-synthesis-api";
    /**
     * Disable stack profiling. Stack profiling may change performance. Disabling stack profiling is beneficial when comparing performance metrics with a build that has it disabled by default.
     */
    case DisableStackProfiler = "--disable-stack-profiler";
    /**
     * Override mechanism for preserving the old non-standard behavior of CSS zoom.
     */
    case DisableStandardizedBrowserZoom = "--disable-standardized-browser-zoom";
    /**
     * Disable strict handle checking for the test process, for testing. This can be used if it's expected that a test process will use an invalid handle.
     */
    case DisableStrictHandleCheckingForTesting = "--disable-strict-handle-checking-for-testing";
    /**
     * Disables the optimizations flags in Commit requests for sync invalidations. This is useful for live tests to avoid flakiness.
     */
    case DisableSyncInvalidationOptimizations = "--disable-sync-invalidation-optimizations";
    /**
     * Disables the check for the system font when specified.
     */
    case DisableSystemFontCheck = "--disable-system-font-check";
    /**
     * Disables the 3rd party keyboard omnibox workaround.
     */
    case DisableThirdPartyKeyboardWorkaround = "--disable-third-party-keyboard-workaround";
    /**
     * Switches for the renderer compositor only.
     */
    case DisableThreadedAnimation = "--disable-threaded-animation";
    /**
     * Disable multithreaded GPU compositing of web content.
     */
    case DisableThreadedCompositing = "--disable-threaded-compositing";
    /**
     * Disable timeouts that may cause the browser to die when running slowly. This is useful if running with profiling (such as debug malloc).
     */
    case DisableTimeoutsForProfiling = "--disable-timeouts-for-profiling";
    /**
     * Disable startup of the updater process.
     */
    case DisableUpdaterScheduler = "--disable-updater-scheduler";
    /**
     * Disables the USB keyboard detection for blocking the OSK on Windows.
     */
    case DisableUsbKeyboardDetect = "--disable-usb-keyboard-detect";
    /**
     * Disable V8 idle tasks.
     */
    case DisableV8IdleTasks = "--disable-v8-idle-tasks";
    /**
     * Disable variations safe mode.
     */
    case DisableVariationsSafeMode = "--disable-variations-safe-mode";
    /**
     * Disable fetching of variations seed from the server for testing.
     */
    case DisableVariationsSeedFetch = "--disable-variations-seed-fetch";
    /**
     * Disables throttling for fetching the variations seed on mobile platforms. The seed will be fetched on startup and every time the app enters the foreground, regardless of the time passed in between the fetches. On Desktop, this switch has no effect (the seed is fetched periodically instead).
     */
    case DisableVariationsSeedFetchThrottling = "--disable-variations-seed-fetch-throttling";
    /**
     * This is for the same feature controlled by kVideoCaptureUseGpuMemoryBuffer. kVideoCaptureUseGpuMemoryBuffer is settled by chromeos overlays. This flag is necessary to overwrite the settings via chrome:// flag. The behavior of chrome://flag#zero-copy-video-capture is as follows; Default : Respect chromeos overlays settings. Enabled : Force to ena...
     */
    case DisableVideoCaptureUseGpuMemoryBuffer = "--disable-video-capture-use-gpu-memory-buffer";
    /**
     * No description…
     */
    case DisableVirtualKeyboard = "--disable-virtual-keyboard";
    /**
     * Disables volume adjust sound.
     */
    case DisableVolumeAdjustSound = "--disable-volume-adjust-sound";
    /**
     * No description…
     */
    case DisableVsyncForTests = "--disable-vsync-for-tests";
    /**
     * Disables falling back to GL based hardware rendering if initializing Vulkan fails. This is to allow tests to catch regressions in Vulkan.
     */
    case DisableVulkanFallbackToGlForTesting = "--disable-vulkan-fallback-to-gl-for-testing";
    /**
     * Disables VK_KHR_surface extension. Instead of using swapchain, bitblt will be used for present render result on screen.
     */
    case DisableVulkanSurface = "--disable-vulkan-surface";
    /**
     * Disable wayland input method editor.
     */
    case DisableWaylandIme = "--disable-wayland-ime";
    /**
     * Disable all versions of WebGL.
     */
    case DisableWebgl = "--disable-webgl";
    /**
     * Disable WebGL2.
     */
    case DisableWebgl2 = "--disable-webgl2";
    /**
     * Disables the WebNN compiler process sandbox.
     */
    case DisableWebnnCompilerSandbox = "--disable-webnn-compiler-sandbox";
    /**
     * Disables encryption of RTP Media for WebRTC. When Chrome embeds Content, it ignores this switch on its stable and beta channels.
     */
    case DisableWebrtcEncryption = "--disable-webrtc-encryption";
    /**
     * Don't enforce the same-origin policy; meant for website testing only. This switch has no effect unless --user-data-dir (as defined by the content embedder) is also present.
     */
    case DisableWebSecurity = "--disable-web-security";
    /**
     * Disables the Welcome Recap feature for factory testing.
     */
    case DisableWelcomeRecapForFactoryTesting = "--disable-welcome-recap-for-factory-testing";
    /**
     * Disable YUV image decoding for those formats and cases where it's supported. Has no effect unless GPU rasterization is enabled.
     */
    case DisableYuvImageDecoding = "--disable-yuv-image-decoding";
    /**
     * Some tests seem to require the application to close when the last browser window is closed. Thus, we need a switch to force this behavior for ChromeOS Aura, disable "zero window mode".
     */
    case DisableZeroBrowsersOpenForTests = "--disable-zero-browsers-open-for-tests";
    /**
     * Disable rasterizer that writes directly to GPU memory associated with tiles.
     */
    case DisableZeroCopy = "--disable-zero-copy";
    /**
     * Test related. Disable re-use of non-exact resources to fulfill ResourcePool requests. Intended only for use in layout or pixel tests to reduce noise.
     */
    case DisallowNonExactResourceReuse = "--disallow-non-exact-resource-reuse";
    /**
     * Disallow blocking developer mode through enterprise device policy: - Fail enterprise enrollment if enrolling would block dev mode. - Don't apply new device policy if it would block dev mode. This is only usable on test builds.
     */
    case DisallowPolicyBlockDevMode = "--disallow-policy-block-dev-mode";
    /**
     * Disallows overriding of v8 feature flags.
     */
    case DisallowV8FeatureFlagOverrides = "--disallow-v8-feature-flag-overrides";
    /**
     * Use a specific disk cache location, rather than one derived from the UserDatadir.
     */
    case DiskCacheDir = "--disk-cache-dir";
    /**
     * Forces the maximum disk space to be used by the disk cache, in bytes.
     */
    case DiskCacheSize = "--disk-cache-size";
    /**
     * Which X11 display to connect to. Emulates the GTK+ "--display=" command line argument. In use only with Ozone/X11.
     * Potential parameters: see description.
     */
    case Display = "--display";
    /**
     * Additional display properties are provided through this switch that are beyond what is available via EDID encoded as JSON. Please see `https://chromium.googlesource.com/chromiumos/platform2/+/dd10a5ae3618bb9dc5fb47ac415ebef6e9a3827d/chromeos-config/README.md#displays` for the data format.
     */
    case DisplayProperties = "--display-properties";
    /**
     * When switches::kProcessType is switches::kRelauncherProcess, if this switch is also present, the relauncher process will unmount and eject a mounted disk image and move its disk image file to the trash. The argument's value must be a BSD device name of the form "diskN" or "diskNsM".
     * Potential parameters: see description.
     */
    case DmgDevice = "--dmg-device";
    /**
     * Specifies if the |DOMAutomationController| needs to be bound in the renderer. This binding happens on per-frame basis and hence can potentially be a performance bottleneck. One should only enable it when automating dom based tests.
     */
    case DomAutomation = "--dom-automation";
    /**
     * Skips initializing the shares NSApplication instance in ChromeTestSuite.
     */
    case DoNotCreateNsappForTests = "--do-not-create-nsapp-for-tests";
    /**
     * Do not de-elevate the browser on launch. Used after de-elevating to prevent infinite loops.
     */
    case DoNotDeElevate = "--do-not-de-elevate";
    /**
     * Sets the number of max pending frames in the GL buffer queue to 1.
     * Potential parameters: see description.
     */
    case DoubleBufferCompositing = "--double-buffer-compositing";
    /**
     * Draws a semitransparent red rect to indicate the bounds of each view. Also, draws a blue semitransparent rect when GetContentBounds() differs from GetLocalBounds().
     */
    case DrawViewBoundsRects = "--draw-view-bounds-rects";
    /**
     * Treats DRM virtual connector as external to enable display mode change in VM.
     */
    case DrmVirtualConnectorIsExternal = "--drm-virtual-connector-is-external";
    /**
     * Logs Runtime Call Stats. --single-process also needs to be used along with this for the stats to be logged.
     */
    case DumpBlinkRuntimeCallStats = "--dump-blink-runtime-call-stats";
    /**
     * Requests that a running browser process dump its collected histograms to a given file. The file is overwritten if it exists.
     */
    case DumpBrowserHistograms = "--dump-browser-histograms";
    /**
     * Debug data dump.
     */
    case DumpCompositorFrame = "--dump-compositor-frame";
    /**
     * Print the serialized DOM (doctype + document.documentElement.outerHTML) to stdout.
     */
    case DumpDom = "--dump-dom";
    /**
     * Path to dumpstate binary to be used for crash reporting. This gives Chromium's crash reporter the flexibility to switch between multiple implementations of dumpstate tool.
     * Potential parameters: see description.
     */
    case DumpstatePath = "--dumpstate-path";
    /**
     * Tells Chrome to do edge touch filtering. Useful for convertible tablet.
     */
    case EdgeTouchFiltering = "--edge-touch-filtering";
    /**
     * Special value for the `kSearchEngineChoiceCountry` command-line flag. Enables the Waffle program and overrides the list of search engines to display the list of all EEA engines.
     * Potential parameters: see description.
     */
    case EeaAll = "--EEA_ALL";
    /**
     * Enables extension options to be embedded in chrome://extensions rather than a new tab.
     */
    case EmbeddedExtensionOptions = "--embedded-extension-options";
    /**
     * Enable accelerated 2D canvas.
     */
    case EnableAccelerated2dCanvas = "--enable-accelerated-2d-canvas";
    /**
     * Forces logging of the actor aggregated journal events in VLOG(1). Useful on Android as VLOGs are removed on official builds.
     */
    case EnableActorJournalVlog = "--enable-actor-journal-vlog";
    /**
     * Enable inverting of selection handles so that they are not clipped by the viewport boundaries.
     */
    case EnableAdaptiveSelectionHandleOrientation = "--enable-adaptive-selection-handle-orientation";
    /**
     * Enable the aggressive flushing of DOM Storage to minimize data loss.
     */
    case EnableAggressiveDomstorageFlushing = "--enable-aggressive-domstorage-flushing";
    /**
     * ANGLE features are defined per-backend in third_party/angle/include/platform Enables specified comma separated ANGLE features if found.
     * Potential parameters: see description.
     */
    case EnableAngleFeatures = "--enable-angle-features";
    /**
     * Enables AI summarization external URL testing for App Switcher.
     * Potential parameters: see description.
     */
    case EnableAppSwitcherAiSummarizationTestingExternalUrl = "--enable-app-switcher-ai-summarization-testing-external-url";
    /**
     * DEPRECATED. Please use --arc-availability=officially-supported. Enables starting the ARC instance upon session start.
     * Potential parameters: see description.
     */
    case EnableArc = "--enable-arc";
    /**
     * Enables ARCVM.
     */
    case EnableArcvm = "--enable-arcvm";
    /**
     * Enables ARCVM DLC.
     */
    case EnableArcvmDlc = "--enable-arcvm-dlc";
    /**
     * If the WebRTC logging private API is active, enables audio debug recordings.
     */
    case EnableAudioDebugRecordingsFromExtension = "--enable-audio-debug-recordings-from-extension";
    /**
     * Enable indication that browser is controlled by automation.
     */
    case EnableAutomation = "--enable-automation";
    /**
     * Enable auto-reload of pages on top-level error.
     */
    case EnableAutoReload = "--enable-auto-reload";
    /**
     * Enables background tracing by passing a scenarios config as an argument. The config is a serialized proto `perfetto.protos.ChromeFieldTracingConfig` defined in third_party/perfetto/protos/perfetto/config/chrome/scenario_config.proto. protoc can be used to generate a serialized proto config with protoc --encode=perfetto.protos.ChromeFieldTracingC...
     * Potential parameters: see description.
     */
    case EnableBackgroundTracing = "--enable-background-tracing";
    /**
     * Whether or not begin frames should be issued over DevToolsProtocol (experimental).
     */
    case EnableBeginFrameControl = "--enable-begin-frame-control";
    /**
     * See flag_descriptions.cc for more details.
     */
    case EnableBenchmarking = "--enable-benchmarking";
    /**
     * Enables the benchmarking JavaScript API.
     */
    case EnableBenchmarkingApi = "--enable-benchmarking-api";
    /**
     * Enable Back Forward Cache support
     */
    case EnableBfcache = "--enable-bfcache";
    /**
     * Used to override `kDisableBirchWeatherApiForTesting` for specific tast tests.
     */
    case EnableBirchWeatherApiForTestingOverride = "--enable-birch-weather-api-for-testing-override";
    /**
     * Enable one or more Blink runtime-enabled features. Use names from runtime_enabled_features.json5, separated by commas. Applied before kDisableBlinkFeatures, and after other flags that change these features.
     * Potential parameters: see description.
     */
    case EnableBlinkFeatures = "--enable-blink-features";
    /**
     * Enables blink runtime enabled features with status:"test" or status:"experimental", which are enabled when running web tests.
     */
    case EnableBlinkTestFeatures = "--enable-blink-test-features";
    /**
     * Enables the multi-level undo system for bookmarks.
     */
    case EnableBookmarkUndo = "--enable-bookmark-undo";
    /**
     * Enable native caret browsing, in which a moveable cursor is placed on a web page, allowing a user to select and navigate through non-editable text using just a keyboard. See https://crbug.com/977390 for links to i2i.
     */
    case EnableCaretBrowsing = "--enable-caret-browsing";
    /**
     * Enables the Cast Receiver.
     */
    case EnableCastReceiver = "--enable-cast-receiver";
    /**
     * Enables the Cast Streaming Receiver.
     */
    case EnableCastStreamingReceiver = "--enable-cast-streaming-receiver";
    /**
     * Enables the Chrome Browser Cloud Management integration on Chromium builds. CBCM is always enabled in branded builds.
     */
    case EnableChromeBrowserCloudManagement = "--enable-chrome-browser-cloud-management";
    /**
     * Allows uninstalling components from the chrome://components page.
     */
    case EnableComponentUninstall = "--enable-component-uninstall";
    /**
     * Enables use of custom content directories under the fuchsia-dir:// scheme. Directories will be mounted under a directory in the browser's namespace.
     */
    case EnableContentDirectories = "--enable-content-directories";
    /**
     * Indicates that crash reporting should be enabled. On platforms where helper processes cannot access to files needed to make this decision, this flag is generated internally.
     */
    case EnableCrashReporter = "--enable-crash-reporter";
    /**
     * Used for turning on Breakpad crash reporting in a debug environment where crash reporting is typically compiled but disabled.
     */
    case EnableCrashReporterForTesting = "--enable-crash-reporter-for-testing";
    /**
     * Enable package hash check: the .crx file sha256 hash sum should be equal to the one received from update manifest.
     */
    case EnableCrxHashCheck = "--enable-crx-hash-check";
    /**
     * enabled: touch events always enabled.
     */
    case Enabled = "--enabled";
    /**
     * Enable validation layers in Dawn backends.
     */
    case EnableDawnBackendValidation = "--enable-dawn-backend-validation";
    /**
     * Set the Dawn features(toggles) enabled on the creation of Dawn devices.
     */
    case EnableDawnFeatures = "--enable-dawn-features";
    /**
     * Enable desktop Android scrollbars.
     */
    case EnableDesktopAndroidScrollbars = "--enable-desktop-android-scrollbars";
    /**
     * If enabled, DevTools will allow creating pwa_handler, to enable executing CDP methods (i.e. PWA.install) on browsers connected remotely
     */
    case EnableDevtoolsPwaHandler = "--enable-devtools-pwa-handler";
    /**
     * Enables Shelf Dimming for ChromeOS.
     */
    case EnableDimShelf = "--enable-dim-shelf";
    /**
     * Enable the dinosaur easter egg alternative images.
     */
    case EnableDinosaurEasterEggAltImages = "--enable-dinosaur-easter-egg-alt-images";
    /**
     * Enable DirectComposition video overlays even if hardware doesn't support it.
     */
    case EnableDirectCompositionVideoOverlays = "--enable-direct-composition-video-overlays";
    /**
     * Enabled the NTP Discover feed.
     */
    case EnableDiscoverFeed = "--enable-discover-feed";
    /**
     * No description…
     */
    case EnableDistillabilityService = "--enable-distillability-service";
    /**
     * Enables Domain Reliability Monitoring.
     */
    case EnableDomainReliability = "--enable-domain-reliability";
    /**
     * No description…
     */
    case EnableDomDistiller = "--enable-dom-distiller";
    /**
     * Enables drawing debug layers for edge-to-edge components to highlight the system insets those components are drawing into. LINT.IfChange(EnableEdgeToEdgeDebugLayers)
     */
    case EnableEdgeToEdgeDebugLayers = "--enable-edge-to-edge-debug-layers";
    /**
     * Use exclusive mode audio streaming for Windows Vista and higher. Leads to lower latencies for audio streams which uses the AudioParameters::AUDIO_PCM_LOW_LATENCY audio path. See http://msdn.microsoft.com/en-us/library/windows/desktop/dd370844.aspx for details.
     * Potential parameters: see description.
     */
    case EnableExclusiveAudio = "--enable-exclusive-audio";
    /**
     * Shows additional automatic click features that haven't launched yet.
     */
    case EnableExperimentalAccessibilityAutoclick = "--enable-experimental-accessibility-autoclick";
    /**
     * Enables support for visually debugging the accessibility labels feature, which provides images descriptions for screen reader users.
     */
    case EnableExperimentalAccessibilityLabelsDebugging = "--enable-experimental-accessibility-labels-debugging";
    /**
     * Enables in progress Switch Access features for text input.
     */
    case EnableExperimentalAccessibilitySwitchAccessText = "--enable-experimental-accessibility-switch-access-text";
    /**
     * Flag that turns on a group of experimental/newly added cookie-related features together, as a convenience for e.g. testing, to avoid having to set multiple switches individually which may be error-prone (not to mention tedious). There is not a corresponding switch to disable all these features, because that is discouraged, and for testing purpos...
     */
    case EnableExperimentalCookieFeatures = "--enable-experimental-cookie-features";
    /**
     * Enables extension APIs that are in development.
     */
    case EnableExperimentalExtensionApis = "--enable-experimental-extension-apis";
    /**
     * Enables experimental WebAssembly features.
     */
    case EnableExperimentalWebassemblyFeatures = "--enable-experimental-webassembly-features";
    /**
     * Enables Web Platform features that are in development.
     */
    case EnableExperimentalWebPlatformFeatures = "--enable-experimental-web-platform-features";
    /**
     * Enables logging for extension activity.
     */
    case EnableExtensionActivityLogging = "--enable-extension-activity-logging";
    /**
     * No description…
     */
    case EnableExtensionActivityLogTesting = "--enable-extension-activity-log-testing";
    /**
     * Name of the command line flag to allow the experimental actor API.
     * Potential parameters: see description.
     */
    case EnableExtensionActorApi = "--enable-extension-actor-api";
    /**
     * Name of the command line flag to allow the ai data collection extension API.
     * Potential parameters: see description.
     */
    case EnableExtensionAiDataCollection = "--enable-extension-ai-data-collection";
    /**
     * Enables sharing assets for installed default apps.
     */
    case EnableExtensionAssetsSharing = "--enable-extension-assets-sharing";
    /**
     * Comma-separated list of feature names to enable. See also kDisableFeatures.
     * Potential parameters: see description.
     */
    case EnableFeatures = "--enable-features";
    /**
     * Enable field trial tests configured in fieldtrial_testing_config.json. If the "disable_fieldtrial_testing_config" GN flag is set to true, then this switch is a no-op. Otherwise, for non-Chrome branded builds, the testing config is already applied by default, unless the "--disable-field-trial-config", "--force-fieldtrials", and/or "--variations-s...
     */
    case EnableFieldTrialConfig = "--enable-field-trial-config";
    /**
     * Enables delta-compression when fetching a new seed via the "first run" code path on Android.
     * Potential parameters: see description.
     */
    case EnableFinchSeedDeltaCompression = "--enable-finch-seed-delta-compression";
    /**
     * Enable font antialiasing for pixel tests.
     */
    case EnableFontAntialiasing = "--enable-font-antialiasing";
    /**
     * Enables the fullscreen sign-in promo.
     */
    case EnableFullscreenSigninPromo = "--enable-fullscreen-signin-promo";
    /**
     * Enable hardware GPU support. Headless uses swiftshader by default for consistency across headless environments. This flag just turns forcing of swiftshader off and lets us revert to regular driver selection logic. Alternatively, specific drivers may be forced with --use-gl or --use-angle. Nethier approach guarantees that hardware GPU support wil...
     */
    case EnableGpu = "--enable-gpu";
    /**
     * Switches for both the renderer and ui compositors.
     */
    case EnableGpuBenchmarking = "--enable-gpu-benchmarking";
    /**
     * Enables measures of how long GPU Main Thread was blocked between SwapBuffers
     */
    case EnableGpuBlockedTime = "--enable-gpu-blocked-time";
    /**
     * Enable GPU client logging.
     */
    case EnableGpuClientLogging = "--enable-gpu-client-logging";
    /**
     * Enables TRACE for GL calls in the renderer.
     */
    case EnableGpuClientTracing = "--enable-gpu-client-tracing";
    /**
     * Turn on Logging GPU commands.
     * Potential parameters: see description.
     */
    case EnableGpuCommandLogging = "--enable-gpu-command-logging";
    /**
     * Turn on Calling GL Error after every command.
     * Potential parameters: see description.
     */
    case EnableGpuDebugging = "--enable-gpu-debugging";
    /**
     * Enable logging of GPU driver debug messages.
     */
    case EnableGpuDriverDebugLogging = "--enable-gpu-driver-debug-logging";
    /**
     * Enables ThreadControllerWithMessagePumpImpl's TimeKeeper UMA metrics using CrGpuMain as suffix.
     */
    case EnableGpuMainTimeKeeperMetrics = "--enable-gpu-main-time-keeper-metrics";
    /**
     * Specify that all compositor resources should be backed by GPU memory buffers.
     */
    case EnableGpuMemoryBufferCompositorResources = "--enable-gpu-memory-buffer-compositor-resources";
    /**
     * Enable GpuMemoryBuffer backed VideoFrames.
     */
    case EnableGpuMemoryBufferVideoFrames = "--enable-gpu-memory-buffer-video-frames";
    /**
     * Allow heuristics to determine when a layer tile should be drawn with the Skia GPU backend. Only valid with GPU accelerated compositing.
     */
    case EnableGpuRasterization = "--enable-gpu-rasterization";
    /**
     * Enable GPU service logging. Note: This is the same switch as the one in gl_switches.cc. It's defined here again to avoid dependencies between dlls.
     */
    case EnableGpuServiceLogging = "--enable-gpu-service-logging";
    /**
     * Turns on calling TRACE for every GL call.
     */
    case EnableGpuServiceTracing = "--enable-gpu-service-tracing";
    /**
     * Specifies that TCP/IP should be used as the gRPC transport typeby Cast Core; otherwise UDS is used.
     */
    case EnableGrpcOverTcpip = "--enable-grpc-over-tcpip";
    /**
     * Force enabling HangoutServicesExtension.
     */
    case EnableHangoutServicesExtensionForTesting = "--enable-hangout-services-extension-for-testing";
    /**
     * Enable compositing individual elements via hardware overlays when permitted by device. Setting the flag to "single-fullscreen" will try to promote a single fullscreen overlay and use it as main framebuffer where possible.
     */
    case EnableHardwareOverlays = "--enable-hardware-overlays";
    /**
     * Enables the use of 32-bit Houdini library for ARM binary translation.
     */
    case EnableHoudini = "--enable-houdini";
    /**
     * Enables the use of 64-bit Houdini library for ARM binary translation.
     */
    case EnableHoudini64 = "--enable-houdini64";
    /**
     * Adds additional thread idle time information into the trace event output.
     */
    case EnableIdleTracing = "--enable-idle-tracing";
    /**
     * Enables support for Handoff from Chrome on iOS to the default browser of other Apple devices.
     */
    case EnableIosHandoffToOtherDevices = "--enable-ios-handoff-to-other-devices";
    /**
     * Enables Isolated Web Apps (IWAs) in a renderer process. There are two ways to enable the IWAs: by feature flag and by enterprise policy. If IWAs are enabled by any of the mentioned above ways then this flag is passed to the renderer process. This flag should not be used from command line. To enable IWAs from command line one should use kIsolated...
     * Potential parameters: see description.
     */
    case EnableIsolatedWebAppsInRenderer = "--enable-isolated-web-apps-in-renderer";
    /**
     * Enables LCD text.
     */
    case EnableLcdText = "--enable-lcd-text";
    /**
     * Enables the leak detection of loading webpages. This allows us to check whether or not reloading a webpage releases web-related objects correctly.
     */
    case EnableLeakDetection = "--enable-leak-detection";
    /**
     * Enables taking a heap snapshot and dumping it to file when using leak detection.
     */
    case EnableLeakDetectionHeapSnapshot = "--enable-leak-detection-heap-snapshot";
    /**
     * Sets the default value for the kLiveCaptionEnabled preference to true.
     * Potential parameters: see description.
     */
    case EnableLiveCaptionPrefForTesting = "--enable-live-caption-pref-for-testing";
    /**
     * Content-implementation switches
     */
    case EnableLocalFileAccesses = "--enable-local-file-accesses";
    /**
     * Enabled the local sync backend implemented by the LoopbackServer.
     */
    case EnableLocalSyncBackend = "--enable-local-sync-backend";
    /**
     * Force logging to be enabled. Logging is disabled by default in release builds.
     */
    case EnableLogging = "--enable-logging";
    /**
     * Enable drag manipulation of longpress-triggered text selections.
     */
    case EnableLongpressDragSelection = "--enable-longpress-drag-selection";
    /**
     * Force low-end device mode when set.
     */
    case EnableLowEndDeviceMode = "--enable-low-end-device-mode";
    /**
     * Enables the switchover to the newer NSAccessibility property-based API.
     */
    case EnableMacAccessibilityApiMigration = "--enable-mac-accessibility-api-migration";
    /**
     * Enables debug feature for drawing rectangle around magnified region, without zooming in.
     */
    case EnableMagnifierDebugDrawRect = "--enable-magnifier-debug-draw-rect";
    /**
     * Enables sending the next BeginMainFrame before the previous commit activates.
     */
    case EnableMainFrameBeforeActivation = "--enable-main-frame-before-activation";
    /**
     * Enables logic to detect microphone mute switch device state, which disables internal audio input when toggled.
     */
    case EnableMicrophoneMuteSwitchDevice = "--enable-microphone-mute-switch-device";
    /**
     * Enable native CPU-mappable GPU memory buffer support on Linux.
     */
    case EnableNativeGpuMemoryBuffers = "--enable-native-gpu-memory-buffers";
    /**
     * Enables natural scroll by default.
     */
    case EnableNaturalScrollDefault = "--enable-natural-scroll-default";
    /**
     * Enables the use of 32-bit NDK translation library for ARM binary translation.
     */
    case EnableNdkTranslation = "--enable-ndk-translation";
    /**
     * Enables the use of 64-bit NDK translation library for ARM binary translation.
     */
    case EnableNdkTranslation64 = "--enable-ndk-translation64";
    /**
     * Enables the network-related benchmarking extensions.
     */
    case EnableNetBenchmarking = "--enable-net-benchmarking";
    /**
     * Enables the type, downlinkMax attributes of the NetInfo API. Also, enables triggering of change attribute of the NetInfo API when there is a change in the connection type.
     */
    case EnableNetworkInformationDownlinkMax = "--enable-network-information-downlink-max";
    /**
     * Enables using the default search engine country to show country specific popular sites on the NTP.
     */
    case EnableNtpSearchEngineCountryDetection = "--enable-ntp-search-engine-country-detection";
    /**
     * Enables the ChromeVox hint in OOBE for dev mode. This flag is used to override the default dev mode behavior of disabling the feature. If both kEnableOOBEChromeVoxHintForDevMode and kDisableOOBEChromeVoxHintTimerForTesting are present, the ChromeVox hint will be disabled, since the latter flag takes precedence over the former.
     */
    case EnableOobeChromevoxHintTimerForDevMode = "--enable-oobe-chromevox-hint-timer-for-dev-mode";
    /**
     * Enables OOBE testing API for tast tests.
     */
    case EnableOobeTestApi = "--enable-oobe-test-api";
    /**
     * Forces tests to produce pixel output when they normally wouldn't.
     */
    case EnablePixelOutputInTests = "--enable-pixel-output-in-tests";
    /**
     * Enables testing features of the Plugin Placeholder. For internal use only.
     */
    case EnablePluginPlaceholderTesting = "--enable-plugin-placeholder-testing";
    /**
     * Enables a number of potentially annoying security features (strict mixed content mode, powerful feature restrictions, etc.)
     * Potential parameters: see description.
     */
    case EnablePotentiallyAnnoyingSecurityFeatures = "--enable-potentially-annoying-security-features";
    /**
     * Make the values returned to window.performance.memory more granular and more up to date in shared worker. Without this flag, the memory information is still available, but it is bucketized and updated less frequently. This flag also applys to workers.
     * Potential parameters: see description.
     */
    case EnablePreciseMemoryInfo = "--enable-precise-memory-info";
    /**
     * Enable the creation of compositing layers when it would prevent LCD text.
     */
    case EnablePreferCompositingToLcdText = "--enable-prefer-compositing-to-lcd-text";
    /**
     * This is needed for V4L2/VAAPI testing using VISL or libfake (virtual drivers) on cros VMs. Minigbm buffer allocation is done using the dumb driver with vkms.
     */
    case EnablePrimaryNodeAccessForVkmsTesting = "--enable-primary-node-access-for-vkms-testing";
    /**
     * Enables Privacy Sandbox APIs: Attribution Reporting, Fledge, Topics, Fenced Frames, Shared Storage, Private Aggregation, and their associated features.
     */
    case EnablePrivacySandboxAdsApis = "--enable-privacy-sandbox-ads-apis";
    /**
     * Force-enables the profile shortcut manager. This is needed for tests since they use a custom-user-data-dir which disables this.
     */
    case EnableProfileShortcutManager = "--enable-profile-shortcut-manager";
    /**
     * Enables protected buffers for encrypted video streams.
     */
    case EnableProtectedVideoBuffers = "--enable-protected-video-buffers";
    /**
     * Enables raster side dark mode for images.
     */
    case EnableRasterSideDarkModeForImages = "--enable-raster-side-dark-mode-for-images";
    /**
     * Enables configuring the OEM Device Requisition in the OOBE.
     */
    case EnableRequisitionEdits = "--enable-requisition-edits";
    /**
     * Enables RGBA_4444 textures.
     */
    case EnableRgba4444Textures = "--enable-rgba-4444-textures";
    /**
     * If enabled, runs unittests using the XCTest test runner.
     */
    case EnableRunIosUnittestsWithXctest = "--enable-run-ios-unittests-with-xctest";
    /**
     * Cause the OS X sandbox write to syslog every time an access to a resource is denied by the sandbox.
     */
    case EnableSandboxLogging = "--enable-sandbox-logging";
    /**
     * Allows scaling clipped images in GpuImageDecodeCache. Note that this may cause color-bleeding.
     */
    case EnableScalingClippedImages = "--enable-scaling-clipped-images";
    /**
     * If true the ServiceProcessLauncher is used to launch services. This allows for service binaries to be loaded rather than using the utility process. This is only useful for tests.
     */
    case EnableServiceBinaryLauncher = "--enable-service-binary-launcher";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case EnableServiceManagerTracing = "--enable-service-manager-tracing";
    /**
     * Enable use of the SGI_video_sync extension, which can have driver/sandbox/window manager compatibility issues.
     */
    case EnableSgiVideoSync = "--enable-sgi-video-sync";
    /**
     * Enables the Skia benchmarking extension.
     */
    case EnableSkiaBenchmarking = "--enable-skia-benchmarking";
    /**
     * No description…
     */
    case EnableSkiaGraphite = "--enable-skia-graphite";
    /**
     * No description…
     */
    case EnableSkiaGraphitePrecompilation = "--enable-skia-graphite-precompilation";
    /**
     * On platforms that support it, enables smooth scroll animation.
     */
    case EnableSmoothScrolling = "--enable-smooth-scrolling";
    /**
     * Enable spatial navigation
     */
    case EnableSpatialNavigation = "--enable-spatial-navigation";
    /**
     * Allows sending text-to-speech requests to speech-dispatcher, a common Linux speech service. Because it's buggy, the user must explicitly enable it so that visiting a random webpage can't cause instability.
     */
    case EnableSpeechDispatcher = "--enable-speech-dispatcher";
    /**
     * Specifies if the |StatsCollectionController| needs to be bound in the renderer. This binding happens on per-frame basis and hence can potentially be a performance bottleneck. One should only enable it when running a test that needs to access the provided statistics.
     */
    case EnableStatsCollectionBindings = "--enable-stats-collection-bindings";
    /**
     * Blocks all insecure requests from secure contexts, and prevents the user from overriding that decision.
     */
    case EnableStrictMixedContentChecking = "--enable-strict-mixed-content-checking";
    /**
     * Enables tablet form factor.
     */
    case EnableTabletFormFactor = "--enable-tablet-form-factor";
    /**
     * Enables the 3rd party keyboard omnibox workaround.
     */
    case EnableThirdPartyKeyboardWorkaround = "--enable-third-party-keyboard-workaround";
    /**
     * Simulates shared textures when share groups are not available. Not available everywhere.
     */
    case EnableThreadedTextureMailboxes = "--enable-threaded-texture-mailboxes";
    /**
     * Whether to enable detection and dispatch of a 'drag from the top' gesture.
     */
    case EnableTopDragGesture = "--enable-top-drag-gesture";
    /**
     * Enables the touch calibration option in MD settings UI for valid touch displays.
     */
    case EnableTouchCalibrationSetting = "--enable-touch-calibration-setting";
    /**
     * Enables touchpad three-finger-click as middle button.
     */
    case EnableTouchpadThreeFingerClick = "--enable-touchpad-three-finger-click";
    /**
     * If the flag is present, it indicates 1) the device has accelerometer and 2) the device is a convertible device or a tablet device (thus is capable of entering tablet mode). If this flag is not set, then the device is not capable of entering tablet mode. For example, Samus has accelerometer, but is not a covertible or tablet, thus doesn't have th...
     * Potential parameters: see description.
     */
    case EnableTouchview = "--enable-touchview";
    /**
     * No description…
     */
    case EnableTracing = "--enable-tracing";
    /**
     * No description…
     */
    case EnableTracingFormat = "--enable-tracing-format";
    /**
     * When specified along with a value in the range (0,1] will --enable-tracing for (roughly) that percentage of tests being run. This is done in a stable manner such that the same tests are chosen each run, and under the assumption that tests hash equally across the range of possible values. The flag will enable all tracing categories for those test...
     * Potential parameters: see description.
     */
    case EnableTracingFraction = "--enable-tracing-fraction";
    /**
     * Similar to the flag above, with the following differences: - A more detailed basename will be generated. - If the value is empty or ends with path separator, the provided directory will be used (with empty standing for current directory) and a detailed basename file will be generated. It is ignored if --trace-startup-file is specified.
     * Potential parameters: see description.
     */
    case EnableTracingOutput = "--enable-tracing-output";
    /**
     * Enables DevTools server for UI (mus, ash, etc). Value should be the port the server is started on. Default port is 9223.
     * Potential parameters: see description.
     */
    case EnableUiDevtools = "--enable-ui-devtools";
    /**
     * Allow usage of SwiftShader for WebGL
     */
    case EnableUnsafeSwiftshader = "--enable-unsafe-swiftshader";
    /**
     * Enable screen capturing support for MediaStream API.
     */
    case EnableUsermediaScreenCapturing = "--enable-usermedia-screen-capturing";
    /**
     * Enable user metrics from within the installer.
     */
    case EnableUserMetrics = "--enable-user-metrics";
    /**
     * Enables the use of the @viewport CSS rule, which allows pages to control aspects of their own layout. This also turns on touch-screen pinch gestures.
     */
    case EnableViewport = "--enable-viewport";
    /**
     * No description…
     */
    case EnableVirtualKeyboard = "--enable-virtual-keyboard";
    /**
     * Enable the Vtune profiler support.
     */
    case EnableVtuneSupport = "--enable-vtune-support";
    /**
     * Enables using protected memory for vulkan resources.
     */
    case EnableVulkanProtectedMemory = "--enable-vulkan-protected-memory";
    /**
     * Try to enable wayland input method editor.
     */
    case EnableWaylandIme = "--enable-wayland-ime";
    /**
     * Enable the wayland server.
     */
    case EnableWaylandServer = "--enable-wayland-server";
    /**
     * Enables WebGL developer extensions which are not generally exposed to the web platform.
     */
    case EnableWebglDeveloperExtensions = "--enable-webgl-developer-extensions";
    /**
     * Enables WebGL draft extensions (not yet approved by the community). This has side-effects in the GPU process, so the flag is here so that code in both gpu/ and content/ can access it.
     */
    case EnableWebglDraftExtensions = "--enable-webgl-draft-extensions";
    /**
     * Enables placing WebGL textures into overlays and giving them low-latency usages. Restricted to ChromeOS, where this functionality is enabled on a per-board basis. NOTE: The value for the switch name should not be renamed for historical reasons (i.e., doing so would require updating this as well and coordinating rollout: https://source.chromium.o...
     * Potential parameters: see description.
     */
    case EnableWebglImageChromium = "--enable-webgl-image-chromium";
    /**
     * Enables WebGPU developer features which are not generally exposed to the web platform.
     */
    case EnableWebgpuDeveloperFeatures = "--enable-webgpu-developer-features";
    /**
     * Enables Widevine CDM support.
     */
    case EnableWidevine = "--enable-widevine";
    /**
     * Enable rasterizer that writes directly to GPU memory associated with tiles.
     */
    case EnableZeroCopy = "--enable-zero-copy";
    /**
     * Encode binary web test results (images, audio) using base64.
     */
    case EncodeBinary = "--encode-binary";
    /**
     * Specifies the URL at which to upload encrypted reports.
     * Potential parameters: see description.
     */
    case EncryptedReportingUrl = "--encrypted-reporting-url";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case EnforceExactPositiveFilter = "--enforce-exact-positive-filter";
    /**
     * Enforce GL minimums.
     */
    case EnforceGlMinimums = "--enforce-gl-minimums";
    /**
     * Crash the browser at startup if the display's color profile does not match the forced color profile. This is necessary on Mac because Chrome's pixel output is always subject to the color conversion performed by the operating system. On all other platforms, this is a no-op.
     */
    case EnsureForcedColorProfile = "--ensure-forced-color-profile";
    /**
     * Disables ARC for managed accounts.
     */
    case EnterpriseDisableArc = "--enterprise-disable-arc";
    /**
     * Whether to enable forced enterprise re-enrollment on Flex.
     */
    case EnterpriseEnableForcedReEnrollmentOnFlex = "--enterprise-enable-forced-re-enrollment-on-flex";
    /**
     * Whether to enable state determination.
     */
    case EnterpriseEnableStateDetermination = "--enterprise-enable-state-determination";
    /**
     * Whether to force manual enrollment instead of trying cert based enrollment. Only works on test builds.
     */
    case EnterpriseForceManualEnrollmentInTestBuilds = "--enterprise-force-manual-enrollment-in-test-builds";
    /**
     * The string that's passed to `switches::kSearchEngineChoiceTriggerRepromptParams` so that we don't reprompt users with the choice screen.
     * Potential parameters: see description.
     */
    case NoReprompt = "--NO_REPROMPT";
    /**
     * Special value for the `kSearchEngineChoiceCountry` command-line flag. Enables the Taiyaki program. On unsupported platform / build types, will fall back to default program / unknown country.
     * Potential parameters: see description.
     */
    case Taiyaki = "--TAIYAKI";
    /**
     * Overrides the behavior of the sign-in dialog when creating a new profile for an enterprise account. Valid values are "accept-new-profile", "accept-current-profile", and "cancel".
     * Potential parameters: see description.
     */
    case EnterpriseSigninDialogBehaviorForTesting = "--enterprise-signin-dialog-behavior-for-testing";
    /**
     * Ignore the profile creation time when determining whether to show the end of life notification incentive. This is meant to make manual testing easier.
     */
    case EolIgnoreProfileCreationTime = "--eol-ignore-profile-creation-time";
    /**
     * Reset the end of life notification prefs to their default value, at the start of the user session. This is meant to make manual testing easier.
     * Potential parameters: see description.
     */
    case EolResetDismissedPrefs = "--eol-reset-dismissed-prefs";
    /**
     * Allows experimental ai extension APIs to be used in stable channel. This disables chrome sign-in if set, regardless of channel.
     */
    case ExperimentalAiStableChannel = "--experimental-ai-stable-channel";
    /**
     * Allows overriding the list of restricted ports by passing a comma-separated list of port numbers.
     * Potential parameters: see description.
     */
    case ExplicitlyAllowedPorts = "--explicitly-allowed-ports";
    /**
     * Enables the observing of all UKM logs created during the session and automatically exports them to the passed file path on shutdown (the file is created if it does not already exist). This also enables viewing all UKM logs in the chrome://metrics-internals debug page. The format of the exported file is outlined in MetricsServiceObserver::ExportL...
     * Potential parameters: see description.
     */
    case ExportUkmLogsToFile = "--export-ukm-logs-to-file";
    /**
     * Enables the observing of all UMA logs created during the session and automatically exports them to the passed file path on shutdown (the file is created if it does not already exist). This also enables viewing all UMA logs in the chrome://metrics-internals debug page. The format of the exported file is outlined in MetricsServiceObserver::ExportL...
     * Potential parameters: see description.
     */
    case ExportUmaLogsToFile = "--export-uma-logs-to-file";
    /**
     * Exposes the window.internals object in JavaScript for testing.
     */
    case ExposeInternalsForTesting = "--expose-internals-for-testing";
    /**
     * Name of the command line flag to force content verification to be on in one of various modes.
     * Potential parameters: see description.
     */
    case ExtensionContentVerification = "--extension-content-verification";
    /**
     * Write extension install events to chrome log for integration test.
     */
    case ExtensionInstallEventChromeLogForTests = "--extension-install-event-chrome-log-for-tests";
    /**
     * Marks a renderer as extension process.
     */
    case ExtensionProcess = "--extension-process";
    /**
     * Allow the chrome.test API to be exposed on web page contexts for testing.
     */
    case ExtensionTestApiOnWebPages = "--extension-test-api-on-web-pages";
    /**
     * Forces the `chrome.test` API to use standardized behavior matching the `browser.test` proposal.
     */
    case ExtensionTestApiStandardizedBehavior = "--extension-test-api-standardized-behavior";
    /**
     * Turns on extension install verification if it would not otherwise have been turned on.
     */
    case ExtensionsInstallVerification = "--extensions-install-verification";
    /**
     * Specifies a comma-separated list of extension ids that should be forced to be treated as not from the webstore when doing install verification.
     * Potential parameters: see description.
     */
    case ExtensionsNotWebstore = "--extensions-not-webstore";
    /**
     * Interval in seconds between Chrome reading external metrics from /var/lib/metrics/uma-events.
     */
    case ExternalMetricsCollectionInterval = "--external-metrics-collection-interval";
    /**
     * Additional query params to insert in the search and instant URLs. Useful for testing.
     * Potential parameters: see description.
     */
    case ExtraSearchQueryParams = "--extra-search-query-params";
    /**
     * Name of a subdirectory of the main external web apps directory which additional web apps configs should be loaded from. Used to load device-specific web apps.
     */
    case ExtraWebAppsDir = "--extra-web-apps-dir";
    /**
     * Causes the AudioManager to fail creating audio streams. Used when testing various failure cases.
     */
    case FailAudioStreamCreation = "--fail-audio-stream-creation";
    /**
     * Specifies number of recommended (fake) ARC apps during user onboarding. App descriptions are generated locally instead of being fetched from server. Limited to ChromeOS-on-linux and test images only.
     * Potential parameters: see description.
     */
    case FakeArcRecommendedAppsForTesting = "--fake-arc-recommended-apps-for-testing";
    /**
     * Inserts fake background blur state into `VideoFrameMetadata`. The value represents the period in milliseconds. eg. Setting it to 1000ms, will cause the blur state to cycle between reporting ENABLED for 500ms and DISABLED for 500ms.
     * Potential parameters: see description.
     */
    case FakeBackgroundBlurTogglePeriod = "--fake-background-blur-toggle-period";
    /**
     * An absolute path to the chroot hosting the DriveFS to use. This is only used when running on Linux, i.e. when IsRunningOnChromeOS() returns false.
     * Potential parameters: see description.
     */
    case FakeDrivefsLauncherChrootPath = "--fake-drivefs-launcher-chroot-path";
    /**
     * A relative path to socket to communicat with the fake DriveFS launcher within the chroot specified by kFakeDriveFsLauncherChrootPath. This is only used when running on Linux, i.e. when IsRunningOnChromeOS() returns false.
     * Potential parameters: see description.
     */
    case FakeDrivefsLauncherSocketPath = "--fake-drivefs-launcher-socket-path";
    /**
     * Path to a OOBE configuration JSON file (used by FakeOobeConfigurationClient).
     * Potential parameters: see description.
     */
    case FakeOobeConfigurationFile = "--fake-oobe-configuration-file";
    /**
     * Fakes the channel of the browser for purposes of Variations filtering. This is to be used for testing only. Possible values are "stable", "beta", "dev" and "canary". This works for official builds as well.
     * Potential parameters: see description.
     */
    case FakeVariationsChannel = "--fake-variations-channel";
    /**
     * Fakes the platform of the browser for variations seed fetching and field trial filtering. Possible values are as follows: "android", "android_webview", "chromeos", "fuchsia", "ios", "linux", "mac", and "win". Intended only for testing.
     * Potential parameters: see description.
     */
    case FakeVariationsPlatform = "--fake-variations-platform";
    /**
     * Report a fake vsync rate (in Hz) instead of the real display refresh rate, skipping the wait on the real hardware vsync signal. E.g. --fake-vsync-rate=240 paces BeginFrames as if the display were 240Hz, regardless of what it actually supports, while still feeding the same BeginFrame path a real vsync signal would. Implemented for Windows only; o...
     * Potential parameters: see description.
     */
    case FakeVsyncRate = "--fake-vsync-rate";
    /**
     * Value indicating whether flag from command line switch is false.
     * Potential parameters: see description.
     */
    case False = "--false";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case FeedbackServer = "--feedback-server";
    /**
     * Handle to the shared memory segment containing field trial state that is to be shared between processes. The argument to this switch is made of segments separated by commas: - The platform-specific handle id for the shared memory as a string. - (Windows only) i=inherited by duplication or p=child must open parent. - The high 64 bits of the share...
     * Potential parameters: see description.
     */
    case FieldTrialHandle = "--field-trial-handle";
    /**
     * Specifies the URL at which to communicate with File Storage Server (go/crosman-file-storage-server) to upload log and support packet files.
     * Potential parameters: see description.
     */
    case FileStorageServerUploadUrl = "--file-storage-server-upload-url";
    /**
     * Define an alias root directory which is replaced with the replacement string in file URLs. The format is "/alias=/replacement", which would turn file:///alias/some/path.html into file:///replacement/some/path.html.
     * Potential parameters: see description.
     */
    case FileUrlPathAlias = "--file-url-path-alias";
    /**
     * The length of time in seconds that an app's copy of the variations seed should be considered fresh. If an app's seed is older than this, a new seed will be requested from WebView's IVariationsSeedServer.
     */
    case FinchSeedExpirationAge = "--finch-seed-expiration-age";
    /**
     * Forces WebView's service to always schedule a new variations seed download job, even if one is already pending.
     */
    case FinchSeedIgnorePendingDownload = "--finch-seed-ignore-pending-download";
    /**
     * The minimum amount of time in seconds that WebView's service will wait between two variations seed downloads from the variations server.
     */
    case FinchSeedMinDownloadPeriod = "--finch-seed-min-download-period";
    /**
     * The minimum amount of time in seconds that the embedded WebView implementation will wait between two requests to WebView's service for a new variations seed.
     */
    case FinchSeedMinUpdatePeriod = "--finch-seed-min-update-period";
    /**
     * Forces WebView's service to always schedule a new variations seed download job, even if the device is not charging. Note this switch may be necessary for testing on Android emulators as these are not always considered to be charging.
     */
    case FinchSeedNoChargingRequirement = "--finch-seed-no-charging-requirement";
    /**
     * Fingerprint sensor location indicates the physical sensor's location. The value is a string with possible values: "power-button-top-left", "keyboard-bottom-left", keyboard-bottom-right", "keyboard-top-right".
     * Potential parameters: see description.
     */
    case FingerprintSensorLocation = "--fingerprint-sensor-location";
    /**
     * Passed to Chrome the first time that it's run after the system boots. Not passed on restart after sign out.
     */
    case FirstExecAfterBoot = "--first-exec-after-boot";
    /**
     * These two flags are added around the switches about:flags adds to the command line. This is useful to see which switches were added by about:flags on about:version. They don't have any effect.
     * Potential parameters: see description.
     */
    case FlagSwitchesBegin = "--flag-switches-begin";
    /**
     * No description…
     */
    case FlagSwitchesEnd = "--flag-switches-end";
    /**
     * Activates an existing tab or app window by URL or app id before creating anything new. Syntax: comma-ordered selectors. Bare URLs are exact. Add a trailing * for prefix. app:<app-id> targets PWAs. Example: --focus=https://meet.google.com/*,app:abc123
     * Potential parameters: see description.
     */
    case Focus = "--focus";
    /**
     * Specifies a file path to write JSON focus result information.
     * Potential parameters: see description.
     */
    case FocusResultFile = "--focus-result-file";
    /**
     * Switch to pass the font cache shared memory handle to the renderer.
     */
    case FontCacheSharedHandle = "--font-cache-shared-handle";
    /**
     * Sets font render hinting when running headless, affects Skia rendering and whether glyph subpixel positioning is enabled. Possible values: none|slight|medium|full|max. Default: full.
     * Potential parameters: see description.
     */
    case FontRenderHinting = "--font-render-hinting";
    /**
     * Specifies the variation of Zero State extensions toolbar recommendation to show. When a user with zero extensions installed clicks on the extensions puzzle piece in the Chrome toolbar, Chrome displays a submenu suggesting the user to explore the Chrome Web Store. Forces application mode. This hides certain system UI elements and forces the app t...
     */
    case ForceAppMode = "--force-app-mode";
    /**
     * Forces a fake backend to generate coral groups.
     */
    case ForceBirchFakeCoralBackend = "--force-birch-fake-coral-backend";
    /**
     * Forces a chip with fake coral group to be shown.
     */
    case ForceBirchFakeCoralGroup = "--force-birch-fake-coral-group";
    /**
     * Forces a fetch of Birch data whenever an informed restore session starts.
     */
    case ForceBirchFetch = "--force-birch-fetch";
    /**
     * If set, skips the logic in birch release notes provider and always sets release notes item.
     */
    case ForceBirchReleaseNotes = "--force-birch-release-notes";
    /**
     * Crash Chrome if GPU process crashes. This is to force a test to fail when GPU process crashes unexpectedly.
     */
    case ForceBrowserCrashOnGpuCrash = "--force-browser-crash-on-gpu-crash";
    /**
     * Tells Chrome to forcefully trigger backward data migration.
     */
    case ForceBrowserDataBackwardMigration = "--force-browser-data-backward-migration";
    /**
     * Force skip or force migration. Should only be used for testing.
     */
    case ForceBrowserDataMigrationForTesting = "--force-browser-data-migration-for-testing";
    /**
     * Forces the caption style for WebVTT captions.
     */
    case ForceCaptionStyle = "--force-caption-style";
    /**
     * Force all monitors to be treated as though they have the specified color profile. Accepted values are "srgb" and "generic-rgb" (currently used by Mac layout tests) and "color-spin-gamma24" (used by layout tests).
     * Potential parameters: see description.
     */
    case ForceColorProfile = "--force-color-profile";
    /**
     * Forces fetching tokens for Cryptohome Recovery.
     */
    case ForceCryptohomeRecoveryForTesting = "--force-cryptohome-recovery-for-testing";
    /**
     * Forces dark mode in UI for platforms that support it.
     */
    case ForceDarkMode = "--force-dark-mode";
    /**
     * Forces the DeviceInfo.isDesktop() check to return true. Can be used to enable desktop-only features on other form factors.
     */
    case ForceDesktopAndroid = "--force-desktop-android";
    /**
     * No description…
     */
    case ForceDeviceOwnership = "--force-device-ownership";
    /**
     * Overrides the device scale factor for the browser UI and the contents.
     */
    case ForceDeviceScaleFactor = "--force-device-scale-factor";
    /**
     * If set, the developer tools are forced to be available.
     */
    case ForceDevtoolsAvailable = "--force-devtools-available";
    /**
     * Forces to remove Chrome Variation Ids from being sent in X-Client-Data header, specified as a 64-bit encoded list of numeric experiment ids. Ids prefixed with the character "t" will be treated as Trigger Variation Ids.
     * Potential parameters: see description.
     */
    case ForceDisableVariationIds = "--force-disable-variation-ids";
    /**
     * Forces Network Quality Estimator (NQE) to return a specific effective connection type.
     */
    case ForceEffectiveConnectionType = "--force-effective-connection-type";
    /**
     * Forces metrics reporting to be enabled. Should not be used for tests as it will send data to servers.
     */
    case ForceEnableMetricsReporting = "--force-enable-metrics-reporting";
    /**
     * Forces the night mode to be enabled.
     */
    case ForceEnableNightMode = "--force-enable-night-mode";
    /**
     * Enables the stylus tools next to the status area.
     */
    case ForceEnableStylusTools = "--force-enable-stylus-tools";
    /**
     * Force the discover feed to show the sign-in promo.
     */
    case ForceFeedSigninPromo = "--force-feed-signin-promo";
    /**
     * This option can be used to force parameters of field trials when testing changes locally. The argument is a param list of (key, value) pairs prefixed by an associated (trial, group) pair. You specify the param list for multiple (trial, group) pairs with a comma separator. Example: "Trial1.Group1:k1/v1/k2/v2,Trial2.Group2:k3/v3/k4/v4" Trial names...
     * Potential parameters: see description.
     */
    case ForceFieldtrialParams = "--force-fieldtrial-params";
    /**
     * This option can be used to force field trials when testing changes locally. The argument is a list of name and value pairs, separated by slashes. If a trial name is prefixed with an asterisk, that trial will start activated. For example, the following argument defines two trials, with the second one activated: "GoogleNow/Enable/*MaterialDesignNT...
     * Potential parameters: see description.
     */
    case ForceFieldtrials = "--force-fieldtrials";
    /**
     * Displays the First Run experience when the browser is started, regardless of whether or not it's actually the First Run (this overrides kNoFirstRun).
     */
    case ForceFirstRun = "--force-first-run";
    /**
     * Forces first-run UI to be shown for every login.
     */
    case ForceFirstRunUi = "--force-first-run-ui";
    /**
     * Force enable the default browser step in the first run experience on Desktop.
     */
    case ForceFreDefaultBrowserStep = "--force-fre-default-browser-step";
    /**
     * Overrides the eligible steps in the Feature Showcase step of the first run experience. Step names should be valid values separated by commas.
     * Potential parameters: see description.
     */
    case ForceFreFeatureShowcaseSteps = "--force-fre-feature-showcase-steps";
    /**
     * Sets the total amount of memory that may be allocated for GPU resources in cc.
     */
    case ForceGpuMemAvailableMb = "--force-gpu-mem-available-mb";
    /**
     * Sets the maximum GPU memory to use for discardable caches.
     */
    case ForceGpuMemDiscardableLimitMb = "--force-gpu-mem-discardable-limit-mb";
    /**
     * Force enables the Happiness Tracking System for the device. This ignores user profile check and time limits and shows the notification every time for any type of user. Should be used only for testing.
     */
    case ForceHappinessTrackingSystem = "--force-happiness-tracking-system";
    /**
     * Forces high-contrast mode for native UI and web content, regardless of system settings.
     */
    case ForceHighContrast = "--force-high-contrast";
    /**
     * No description…
     */
    case ForceHighPerformanceGpu = "--force-high-performance-gpu";
    /**
     * Forces the use of QPC for TimeTicks even if cpuid doesn't report the presence of an invariant TSC.
     */
    case ForceHighResTimeticks = "--force-high-res-timeticks";
    /**
     * Forces Hardware ID check (happens during OOBE) to fail or succeed. Possible values: "failure" or "success". Should be used only for testing.
     * Potential parameters: see description.
     */
    case ForceHwidCheckResultForTest = "--force-hwid-check-result-for-test";
    /**
     * Forces FullRestoreService to launch browser for telemetry tests.
     */
    case ForceLaunchBrowser = "--force-launch-browser";
    /**
     * Usually in browser tests the usual login manager bringup is skipped so that tests can change how it's brought up. This flag disables that.
     */
    case ForceLoginManagerInTests = "--force-login-manager-in-tests";
    /**
     * Sets the maximum texture size in pixels.
     */
    case ForceMaxTextureSize = "--force-max-texture-size";
    /**
     * When present overrides the screen resolution used by CanDisplayType API, instead of using the values obtained from avsettings.
     * Potential parameters: see description.
     */
    case ForceMediaResolutionHeight = "--force-media-resolution-height";
    /**
     * No description…
     */
    case ForceMediaResolutionWidth = "--force-media-resolution-width";
    /**
     * Forces the use of the mojo renderer. In other words, the renderer process will run a mojo renderer and CastRenderer will run in the browser process. This is necessary for devices that use CastRenderer. For this flag to have any effect, note that you must build the cast web runtime with the gn arg "enable_cast_renderer" set to true, and "renderer...
     */
    case ForceMojoRenderer = "--force-mojo-renderer";
    /**
     * Forces MSBB setting to be on for UKM recording. Should only be used in automated testing browser sessions in which it is infeasible or impractical to toggle the setting manually.
     */
    case ForceMsbbSettingOnForUkm = "--force-msbb-setting-on-for-ukm";
    /**
     * Forces recording of NavigationTimeline UKM. Useful for testing NavigationTimeline UKM recording in browser tests.
     */
    case ForceNavigationTimelineUkmRecordingForTesting = "--force-navigation-timeline-ukm-recording-for-testing";
    /**
     * Forces each navigation to use a new BrowsingInstance.
     */
    case ForceNewBrowsingInstance = "--force-new-browsing-instance";
    /**
     * Prevent the offline indicator from showing.
     */
    case ForceOnlineConnectionStateForIndicator = "--force-online-connection-state-for-indicator";
    /**
     * If set, the unload event cannot be disabled by default by Permissions-Policy.
     */
    case ForcePermissionPolicyUnloadDefaultEnabled = "--force-permission-policy-unload-default-enabled";
    /**
     * Forces whether the user desires no reduced motion, regardless of system settings.
     */
    case ForcePrefersNoReducedMotion = "--force-prefers-no-reduced-motion";
    /**
     * Forces whether the user desires reduced motion, regardless of system settings.
     */
    case ForcePrefersReducedMotion = "--force-prefers-reduced-motion";
    /**
     * This forces pages to be loaded as presentation receivers. Useful for testing behavior specific to presentation receivers. Spec: https://www.w3.org/TR/presentation-api/#interface-presentationreceiver
     */
    case ForcePresentationReceiverForTesting = "--force-presentation-receiver-for-testing";
    /**
     * Forces protected memory for all output video buffers generated by FuchsiaVideoDecoder, including unencrypted streams. Ignored unless --enable-protected-video-buffers is also specified.
     */
    case ForceProtectedVideoOutputBuffers = "--force-protected-video-output-buffers";
    /**
     * Force rastering to take place in the specified color profile. Accepted values are the same as for the kForceDisplayColorProfile case above.
     * Potential parameters: see description.
     */
    case ForceRasterColorProfile = "--force-raster-color-profile";
    /**
     * Forces any Reading Mode activation on a web page to immediately timeout due to distillation delay.
     */
    case ForceReaderModeDistillationTimeout = "--force-reader-mode-distillation-timeout";
    /**
     * On devices that support refresh rate throttling, force the throttling behavior to be active regardless of system state.
     */
    case ForceRefreshRateThrottle = "--force-refresh-rate-throttle";
    /**
     * Force renderer accessibility to be on instead of enabling it on demand when a screen reader is detected. The disable-renderer-accessibility switch overrides this if present. This switch has an optional parameter that forces an AXMode bundle. The three available bundle settings are: 'basic', 'form-controls', and 'complete'. If the bundle argument...
     */
    case ForceRendererAccessibility = "--force-renderer-accessibility";
    /**
     * Force reporting destination attested for headless shell.
     */
    case ForceReportingDestinationAttested = "--force-reporting-destination-attested";
    /**
     * Force-enable showing the search engine choice screen for testing regardless of region or choice already having been made.
     */
    case ForceSearchEngineChoiceScreen = "--force-search-engine-choice-screen";
    /**
     * Force the use of a separate EGL display for WebGL contexts. Used for testing multi-GPU pathways on devices with only one valid GPU.
     * Potential parameters: see description.
     */
    case ForceSeparateEglDisplayForWebglTesting = "--force-separate-egl-display-for-webgl-testing";
    /**
     * Enables shopping feature user experience for the segment specified in the argument, e.g. "ShoppingUser" or "Other".
     */
    case ForceShopperExperience = "--force-shopper-experience";
    /**
     * Forces the cursor to be shown even if we are mimicking touch events. Note that cursor changes are locked when using this switch.
     */
    case ForceShowCursor = "--force-show-cursor";
    /**
     * Force the "release track" UI to show in the system tray. Simulates the system being on a non-stable release channel with feedback enabled.
     */
    case ForceShowReleaseTrack = "--force-show-release-track";
    /**
     * Forces the update menu badge to show.
     */
    case ForceShowUpdateMenuBadge = "--force-show-update-menu-badge";
    /**
     * Forces the status area to allow collapse/expand regardless of the current state.
     */
    case ForceStatusAreaCollapsible = "--force-status-area-collapsible";
    /**
     * Enables required things for the selected UI mode, regardless of whether the Chromebook is currently in the selected UI mode.
     */
    case ForceTabletMode = "--force-tablet-mode";
    /**
     * If set, tablet-like power button behavior (i.e. tapping the button turns the screen off) is used even if the device is in laptop mode.
     */
    case ForceTabletPowerButton = "--force-tablet-power-button";
    /**
     * Force the text rendering to a specific direction. Valid values are "ltr" (left-to-right) and "rtl" (right-to-left). Only tested meaningfully with RTL.
     * Potential parameters: see description.
     */
    case ForceTextDirection = "--force-text-direction";
    /**
     * Force the UI to a specific direction. Valid values are "ltr" (left-to-right) and "rtl" (right-to-left).
     * Potential parameters: see description.
     */
    case ForceUiDirection = "--force-ui-direction";
    /**
     * Forces the update menu type to a specific type.
     */
    case ForceUpdateMenuType = "--force-update-menu-type";
    /**
     * OTA update related switches.
     */
    case ForceUpdateRemoteUrl = "--force-update-remote-url";
    /**
     * Forces additional Chrome Variation Ids that will be sent in X-Client-Data header, specified as a 64-bit encoded list of numeric experiment ids. Ids prefixed with the character "t" will be treated as Trigger Variation Ids. IMPORTANT: You can use this switch for test purposes (e.g. a manual command line run or from a unit test), but NOT for produc...
     * Potential parameters: see description.
     */
    case ForceVariationIds = "--force-variation-ids";
    /**
     * Force media player using SurfaceView instead of SurfaceTexture on Android. Note: This is used by the Cast playback pipeline and must be kept.
     */
    case ForceVideoOverlays = "--force-video-overlays";
    /**
     * Use Windows WaveOut/In audio API even if Core Audio is supported.
     */
    case ForceWaveAudio = "--force-wave-audio";
    /**
     * Force all WebGPU content to run in WebGPU Compatibility mode.
     */
    case ForceWebgpuCompat = "--force-webgpu-compat";
    /**
     * Override WebRTC IP handling policy to mimic the behavior when WebRTC IP handling policy is specified in Preferences.
     */
    case ForceWebrtcIpHandlingPolicy = "--force-webrtc-ip-handling-policy";
    /**
     * Forcibly enable and select the specified runtime for webxr. Note that this provides an alternative means of enabling a runtime, and will also functionally disable all other runtimes.
     */
    case ForceWebxrRuntime = "--force-webxr-runtime";
    /**
     * Displays the What's New experience when the browser is started if it has not yet been shown for the current milestone (this overrides kNoFirstRun, without showing the First Run experience).
     */
    case ForceWhatsNew = "--force-whats-new";
    /**
     * Overrides the target language for translation and forces translation of all pages to the new target language.
     */
    case ForcedTranslateLanguage = "--forced-translate-language";
    /**
     * Parameter to enable or disable refreshing Gemini quota when the app enters the foreground.
     */
    case ForegroundQuotaRefreshEnabled = "--foreground_quota_refresh_enabled";
    /**
     * Specifies the device's form factor. If provided, this flag overrides the value from the LSB release info. Possible values are: "CHROMEBASE", "CHROMEBIT", "CHROMEBOOK", "REFERENCE", "CHROMEBOX"
     * Potential parameters: see description.
     */
    case FormFactor = "--form-factor";
    /**
     * Indicates that this launch of the browser originated from the Legacy Browser Support for Edge extension's native host. This is recorded in UMA.
     */
    case FromBrowserSwitcher = "--from-browser-switcher";
    /**
     * Indicates that this launch of the browser originated from the installer (i.e., following a successful new install or over-install). This triggers browser behaviors for this specific launch, such as a welcome announcement for accessibility software (see https://crbug.com/40685905).
     */
    case FromInstaller = "--from-installer";
    /**
     * Generates full memory crash dump.
     */
    case FullMemoryCrashReport = "--full-memory-crash-report";
    /**
     * The following three switches match those in fuzztest and are defined the same way. We know about them in this test suite so that we can act differently if we're in fuzzing mode. These appear to be very stable fuzztest flags and it's unlikely that we'd ever need to detect others in a similar way, but if this proves to be unstable then we could ad...
     */
    case Fuzz = "--fuzz";
    /**
     * Specifies a string containing the JSON config for GAIA urls. This is equivalent to pointing to a file with the same content via kGaiaConfigPath. See "google_apis/test/data/gaia/all_urls.json" for a format example.
     * Potential parameters: see description.
     */
    case GaiaConfigContents = "--gaia-config-contents";
    /**
     * Specifies the path for GAIA authentication URL. The default value is "https://accounts.google.com".
     * Potential parameters: see description.
     */
    case GaiaUrl = "--gaia-url";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case GamepadPollingInterval = "--gamepad-polling-interval";
    /**
     * Sets the checkin service endpoint that will be used for performing Google Cloud Messaging checkins.
     */
    case GcmCheckinUrl = "--gcm-checkin-url";
    /**
     * Sets the Mobile Connection Server endpoint that will be used for Google Cloud Messaging.
     */
    case GcmMcsEndpoint = "--gcm-mcs-endpoint";
    /**
     * Sets the registration endpoint that will be used for creating new Google Cloud Messaging registrations.
     */
    case GcmRegistrationUrl = "--gcm-registration-url";
    /**
     * Enable HID device access for the GCPW sign-in process.
     */
    case GcpwSignin = "--gcpw-signin";
    /**
     * The name for the command-line switch used to provide the activation time threshold for the Gemini app. Note that this switch will only be used for testing purposes.
     * Potential parameters: see description.
     */
    case GeminiAppPreinstallActivationTimeThreshold = "--gemini-app-preinstall-activation-time-threshold";
    /**
     * Parameter on GeminiQuizzes to open quizzes in a new tab instead of the Gemini web modal.
     */
    case GeminiQuizzesOpenInNewTab = "--gemini_quizzes_open_in_new_tab";
    /**
     * For development / testing only. When enabled the switch generates expectations files upon running an ax_inspect test. For example, when running content_browsertests, it saves output of failing accessibility tests to their expectations files in content/test/data/accessibility/, overwriting existing file content.
     * Potential parameters: see description.
     */
    case GenerateAccessibilityTestExpectations = "--generate-accessibility-test-expectations";
    /**
     * Embed the document outline into printed PDFs.
     */
    case GeneratePdfDocumentOutline = "--generate-pdf-document-outline";
    /**
     * Enable the getAccessToken autotest API which creates access tokens using the internal OAuth client ID.
     */
    case GetAccessTokenForTest = "--get-access-token-for-test";
    /**
     * Include ANGLE's intermediate representation (AST) output in shader compilation info logs.
     */
    case GlShaderIntermOutput = "--gl-shader-interm-output";
    /**
     * List of URL patterns in the glic webview to redirect to an admin blocked panel, as a space-separated list.
     * Potential parameters: see description.
     */
    case GlicAdminRedirectPatterns = "--glic-admin-redirect-patterns";
    /**
     * No description…
     */
    case GlicAlwaysOpenFre = "--glic-always-open-fre";
    /**
     * Whether to show web actuation toggle in the Chrome AI settings page.
     */
    case GlicAlwaysShowWebActuationToggle = "--glic-always-show-web-actuation-toggle";
    /**
     * No description…
     */
    case GlicAlwaysSkipFre = "--glic-always-skip-fre";
    /**
     * Automation is intended to be passed in addition to glic-dev. It further disables functionality to make basic testing easier.
     */
    case GlicAutomation = "--glic-automation";
    /**
     * Dev mode for glic only exposed via command line flag.
     * Potential parameters: see description.
     */
    case GlicDev = "--glic-dev";
    /**
     * No description…
     */
    case GlicExperimentalFreUrl = "--glic-experimental-fre-url";
    /**
     * Overrides the glic guest URL.
     * Potential parameters: see description.
     */
    case GlicGuestUrl = "--glic-guest-url";
    /**
     * Configure preset guest URLs for manual testing. These are saved to local state prefs and can be selected to override the default glic guest URL through corresponding entries in chrome://flags.
     * Potential parameters: see description.
     */
    case GlicGuestUrlPresetAutopush = "--glic-guest-url-preset-autopush";
    /**
     * No description…
     */
    case GlicGuestUrlPresetPreprod = "--glic-guest-url-preset-preprod";
    /**
     * No description…
     */
    case GlicGuestUrlPresetProd = "--glic-guest-url-preset-prod";
    /**
     * No description…
     */
    case GlicGuestUrlPresetStaging = "--glic-guest-url-preset-staging";
    /**
     * Whether additional logging is enabled in the glic api host.
     */
    case GlicHostLogging = "--glic-host-logging";
    /**
     * Use --glic-open-on-startup=attached or --glic-open-on-startup=detached.
     * Potential parameters: see description.
     */
    case GlicOpenOnStartup = "--glic-open-on-startup";
    /**
     * No description…
     */
    case GlicShortcutsLearnMoreUrl = "--glic-shortcuts-learn-more-url";
    /**
     * If this flag is set, then the page navigating will not trigger a reload.
     */
    case GlicSkipReloadAfterNavigation = "--glic-skip-reload-after-navigation";
    /**
     * List of allowed origins in the glic webview, as a space-separated list.
     * Potential parameters: see description.
     */
    case GlicWebuiAllowedOrigins = "--glic-webui-allowed-origins";
    /**
     * Disables the GpuMemoryBufferReadbackFromTexture codepath for debugging purposes.
     * Potential parameters: see description.
     */
    case GmbReadbackFromTextureDisabledForDebugging = "--gmb-readback-from-texture-disabled-for-debugging";
    /**
     * API Key used to access Google services.
     */
    case GoogleApiKey = "--google-api-key";
    /**
     * Specifies the backend server used for Google API calls. "https://www.googleapis.com".
     */
    case GoogleApisUrl = "--google-apis-url";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case GoogleBaseUrl = "--google-base-url";
    /**
     * Overrides the URL used to fetch the current Google Doodle. Example: https://www.google.com/async/ddljson Testing? Try: https://www.gstatic.com/chrome/ntp/doodle_test/ddljson_android0.json https://www.gstatic.com/chrome/ntp/doodle_test/ddljson_android1.json https://www.gstatic.com/chrome/ntp/doodle_test/ddljson_android2.json https://www.gstatic.c...
     * Potential parameters: see description.
     */
    case GoogleDoodleUrl = "--google-doodle-url";
    /**
     * Specifies the domain of the SAPISID cookie. The default value is "http://.google.com".
     * Potential parameters: see description.
     */
    case GoogleUrl = "--google-url";
    /**
     * Select a different set of GPU blocklist entries with the specified test_group ID.
     * Potential parameters: see description.
     */
    case GpuBlocklistTestGroup = "--gpu-blocklist-test-group";
    /**
     * Time the browser process requested the GPU channel for the renderer (in TimeTicks).
     */
    case GpuChannelRequestStartTimeTicks = "--gpu-channel-request-start-time-ticks";
    /**
     * No description…
     */
    case GpuClientId = "--gpu-client-id";
    /**
     * Passes the active graphics device id from browser process to info collection GPU process.
     */
    case GpuDeviceId = "--gpu-device-id";
    /**
     * Allows explicitly specifying the shader disk cache size for embedded devices. Default value is 6MB. On Android, 2MB is default and 128KB for low-end devices.
     * Potential parameters: see description.
     */
    case GpuDiskCacheSizeKb = "--gpu-disk-cache-size-kb";
    /**
     * Enable an extra set of GPU driver bug list entries with the specified test_group ID. Note the default test group (group 0) is still active.
     * Potential parameters: see description.
     */
    case GpuDriverBugListTestGroup = "--gpu-driver-bug-list-test-group";
    /**
     * Passes the active graphics driver version from browser process to info collection GPU process.
     */
    case GpuDriverVersion = "--gpu-driver-version";
    /**
     * Extra command line options for launching the GPU process (normally used for debugging). Use like renderer-cmd-prefix.
     * Potential parameters: see description.
     */
    case GpuLauncher = "--gpu-launcher";
    /**
     * Inform Chrome that a GPU context will not be lost in power saving mode, screen saving mode, etc. Note that this flag does not ensure that a GPU context will never be lost in any situations, say, a GPU reset.
     */
    case GpuNoContextLost = "--gpu-no-context-lost";
    /**
     * Passes encoded GpuPreferences to GPU process.
     */
    case GpuPreferences = "--gpu-preferences";
    /**
     * No description…
     */
    case GpuProcess = "--gpu-process";
    /**
     * Sets the maximum size of the in-memory gpu program cache, in kb
     */
    case GpuProgramCacheSizeKb = "--gpu-program-cache-size-kb";
    /**
     * The number of multisample antialiasing samples for GPU rasterization. Requires MSAA support on GPU to have an effect. 0 disables MSAA.
     * Potential parameters: see description.
     */
    case GpuRasterizationMsaaSampleCount = "--gpu-rasterization-msaa-sample-count";
    /**
     * Passes the number of recent GPU crashes to the GPU process.
     * Potential parameters: see description.
     */
    case GpuRecentCrashCount = "--gpu-recent-crash-count";
    /**
     * Passes the active graphics revision info from browser process to info collection GPU process.
     */
    case GpuRevision = "--gpu-revision";
    /**
     * Allows shmat() system call in the GPU sandbox.
     */
    case GpuSandboxAllowSysvShm = "--gpu-sandbox-allow-sysv-shm";
    /**
     * Makes GPU sandbox failures fatal.
     */
    case GpuSandboxFailuresFatal = "--gpu-sandbox-failures-fatal";
    /**
     * Starts the GPU sandbox before creating a GL context.
     */
    case GpuSandboxStartEarly = "--gpu-sandbox-start-early";
    /**
     * Causes the GPU process to display a dialog on launch.
     */
    case GpuStartupDialog = "--gpu-startup-dialog";
    /**
     * Passes the active graphics sub system id from browser process to info collection GPU process.
     */
    case GpuSubSystemId = "--gpu-sub-system-id";
    /**
     * Passes the active graphics vendor id from browser process to info collection GPU process.
     */
    case GpuVendorId = "--gpu-vendor-id";
    /**
     * Override value for the GPU watchdog timeout in seconds.
     * Potential parameters: see description.
     */
    case GpuWatchdogTimeoutSeconds = "--gpu-watchdog-timeout-seconds";
    /**
     * Causes the second GPU process used for gpu info collection to display a dialog on launch.
     */
    case Gpu2StartupDialog = "--gpu2-startup-dialog";
    /**
     * No description…
     */
    case GraphicsBufferCount = "--graphics-buffer-count";
    /**
     * Specifies campaigns to override for testing.
     */
    case GrowthCampaigns = "--growth-campaigns";
    /**
     * Clear all growth framework Feature Engagement events at session start for testing.
     */
    case GrowthCampaignsClearEventsAtSessionStart = "--growth-campaigns-clear-events-at-session-start";
    /**
     * Specifies the device current time in `SecondsSinceUnixEpoch` format for testing.
     */
    case GrowthCampaignsCurrentTime = "--growth-campaigns-current-time";
    /**
     * Specifies the delay time to trigger campaigns for testing.
     */
    case GrowthCampaignsDelayedTriggerTimeInSecs = "--growth-campaigns-delayed-trigger-time-in-secs";
    /**
     * Path for which to load growth campaigns file for testing (instead of downloading from Omaha).
     * Potential parameters: see description.
     */
    case GrowthCampaignsPath = "--growth-campaigns-path";
    /**
     * Specifies the device registered time in `SecondsSinceUnixEpoch` format for testing.
     */
    case GrowthCampaignsRegisteredTime = "--growth-campaigns-registered-time";
    /**
     * Specify the GTK version to be loaded.
     */
    case GtkVersion = "--gtk-version";
    /**
     * Causes the browser to launch directly in guest mode.
     */
    case Guest = "--guest";
    /**
     * Large wallpaper to use in guest mode (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case GuestWallpaperLarge = "--guest-wallpaper-large";
    /**
     * Small wallpaper to use in guest mode (as path to trusted, non-user-writable JPEG file).
     * Potential parameters: see description.
     */
    case GuestWallpaperSmall = "--guest-wallpaper-small";
    /**
     * Some (Qualcomm only at the moment) V4L2 video decoders require setting the framerate so that the hardware decoder can scale the clocks efficiently. This provides a mechanism during testing to lock the decoder framerate to a specific value.
     * Potential parameters: see description.
     */
    case HardwareVideoDecodeFramerate = "--hardware-video-decode-framerate";
    /**
     * Allows explicitly picking a device path to find the device for VA-API video decoding and encoding.
     * Potential parameters: see description.
     */
    case HardwareVideoDevicePath = "--hardware-video-device-path";
    /**
     * If set, the system is a Chromebook with a "standard Chrome OS keyboard", which generally means one with a Search key in the standard Caps Lock location above the Left Shift key. It should be unset for Chromebooks with both Search and Caps Lock keys (e.g. stout) and for devices like Chromeboxes that only use external keyboards.
     */
    case HasChromeosKeyboard = "--has-chromeos-keyboard";
    /**
     * Whether this device that has hps.
     */
    case HasHps = "--has-hps";
    /**
     * Whether this device has an internal stylus.
     */
    case HasInternalStylus = "--has-internal-stylus";
    /**
     * If set, the system is a Chromebook with a number pad as part of its internal keyboard.
     * Potential parameters: see description.
     */
    case HasNumberPad = "--has-number-pad";
    /**
     * Run in headless mode, i.e., without a UI or display server dependencies.
     */
    case Headless = "--headless";
    /**
     * These flags show the man page on Linux. They are equivalent to each other.
     */
    case Help = "--help";
    /**
     * Enables Hermes fake behavior. By default, no carrier profiles are setup. If a value of "on" is passed for this switch, then hermes fakes are initialized with a single installed carrier profile. Fake cellular service corresponding to carrier profiles are also setup in Shill.
     * Potential parameters: see description.
     */
    case HermesFake = "--hermes-fake";
    /**
     * Sets how long a wrongly hidden network must have existed in order to be considered for removal. The interval should be provided in days, should follow the format "--hidden-network-migration-age=#", and should be >= 0.
     * Potential parameters: see description.
     */
    case HiddenNetworkMigrationAge = "--hidden-network-migration-age";
    /**
     * Controls how often the HiddenNetworkHandler class checks for wrongly hidden networks. The interval should be provided in seconds, should follow the format "--hidden-network-migration-interval=#", and should be >= 1.
     * Potential parameters: see description.
     */
    case HiddenNetworkMigrationInterval = "--hidden-network-migration-interval";
    /**
     * Does not show the crash restore bubble when the browser is started during the system startup phase in ChromeOS, if the ChromeOS full restore feature is enabled, because the ChromeOS full restore notification is shown for the user to select restore or not.
     */
    case HideCrashRestoreBubble = "--hide-crash-restore-bubble";
    /**
     * Makes Windows happy by allowing it to show "Enable access to this program" checkbox in Add/Remove Programs->Set Program Access and Defaults. This only shows an error box because the only way to hide Chrome is by uninstalling it.
     */
    case HideIcons = "--hide-icons";
    /**
     * Prevents creating scrollbars for web content. Useful for taking consistent screenshots.
     */
    case HideScrollbars = "--hide-scrollbars";
    /**
     * Highlight the contents (including web contents) of all WebViews with a yellow tint. This is useful for identifying WebViews in an Android application.
     */
    case HighlightAllWebviews = "--highlight-all-webviews";
    /**
     * No description…
     */
    case HomeEnvOverride = "--home-env-override";
    /**
     * Defines user homedir. This defaults to primary user homedir.
     */
    case Homedir = "--homedir";
    /**
     * Specifies which page will be displayed in newly-opened tabs. We need this for testing purposes so that the UI tests don't depend on what comes up for http://google.com.
     */
    case Homepage = "--homepage";
    /**
     * The integer value of a file descriptor inherited by the mojo_proxy process when launched by its host. This descriptor references a Unix socket which is connected to the host process which launched this proxy to sit between the host and some legacy client application. Required.
     * Potential parameters: see description.
     */
    case HostIpczTransportFd = "--host-ipcz-transport-fd";
    /**
     * No description…
     */
    case HostPackageLabel = "--host-package-label";
    /**
     * When we retrieve the package name within the SDK Runtime, we need to use a bit of a hack to do this by taking advantage of the fact that the pid is the same pid as the application's pid + 10000. see: https://cs.android.com/android/platform/superproject/main/+/main:frameworks/base/core/java/android/os/Process.java;l=292;drc=47fffdd53115a9af1820e3...
     * Potential parameters: see description.
     */
    case HostPackageName = "--host-package-name";
    /**
     * These mappings only apply to the host resolver.
     */
    case HostResolverRules = "--host-resolver-rules";
    /**
     * Deprecated alias for backwards compatibility, now does the same thing as --host-resolver-rules which should be used instead.
     */
    case HostRules = "--host-rules";
    /**
     * No description…
     */
    case HostVersionCode = "--host-version-code";
    /**
     * `kEnableHttp2GreaseSettings` does not include the word "enable" for historical reasons.
     */
    case Http2GreaseSettings = "--http2-grease-settings";
    /**
     * If set, the "ignore_dev_conf" field in StartArcVmRequest message will consequently be set such that all development configuration directives in /usr/local/vms/etc/arcvm_dev.conf will be ignored during ARCVM start.
     */
    case IgnoreArcvmDevConf = "--ignore-arcvm-dev-conf";
    /**
     * Ignores autocomplete="off" for Autofill data (profiles + credit cards).
     * Potential parameters: see description.
     */
    case IgnoreAutocompleteOffAutofill = "--ignore-autocomplete-off-autofill";
    /**
     * The switch to ignore bad mojo message reports. Only for testing.
     */
    case IgnoreBadMessageForTesting = "--ignore-bad-message-for-testing";
    /**
     * A set of public key hashes for which to ignore certificate-related errors. If the certificate chain presented by the server does not validate, and one or more certificates have public key hashes that match a key from this list, the error is ignored. The switch value must be a comma-separated list of Base64-encoded SHA-256 SPKI Fingerprints (RFC ...
     * Potential parameters: see description.
     */
    case IgnoreCertificateErrorsSpkiList = "--ignore-certificate-errors-spki-list";
    /**
     * When set, this will ignore the PortPermission passed in the google_util.h methods and ignore the port numbers. This makes it easier to run tests for features that use these methods (directly or indirectly) with the EmbeddedTestServer, which is more representative of production.
     * Potential parameters: see description.
     */
    case IgnoreGooglePortNumbers = "--ignore-google-port-numbers";
    /**
     * Ignores GPU blocklist.
     * Potential parameters: see description.
     */
    case IgnoreGpuBlocklist = "--ignore-gpu-blocklist";
    /**
     * Override the --no-first-run dialog suppression for the search dialog for testing
     */
    case IgnoreNoFirstRunForSearchEngineChoiceScreen = "--ignore-no-first-run-for-search-engine-choice-screen";
    /**
     * If provided with kProfileDirectory, does not create the profile if the profile directory doesn't exist.
     */
    case IgnoreProfileDirectoryIfNotExists = "--ignore-profile-directory-if-not-exists";
    /**
     * If true, chrome would silently ignore unknown auth factor types instead of crashing.
     */
    case IgnoreUnknownAuthFactors = "--ignore-unknown-auth-factors";
    /**
     * If true, profile selection in UserManager will always return active user's profile.
     */
    case IgnoreUserProfileMappingForTests = "--ignore-user-profile-mapping-for-tests";
    /**
     * Triggers the import of passwords on startup.
     */
    case ImportPasswords = "--import-passwords";
    /**
     * Creates the service broker inside of this process. Only one process should host the service broker.
     */
    case InProcessBroker = "--in-process-broker";
    /**
     * Run the GPU process as a thread in the browser process.
     */
    case InProcessGpu = "--in-process-gpu";
    /**
     * Indicates that the Context was created without a |data_directory|.
     */
    case Incognito = "--incognito";
    /**
     * By default, mojo_proxy assumes its host is a broker. When this flag is given it instead assumes its host is a non-broker who is offering to share their broker. The proxy must be configured correctly in this regard or all connections through it will fail.
     */
    case InheritIpczBroker = "--inherit-ipcz-broker";
    /**
     * Specifies that the main-thread Isolate should initialize in foreground mode. If not specified, the the Isolate will start in background mode for extension processes and foreground mode otherwise.
     */
    case InitIsolateAsForeground = "--init-isolate-as-foreground";
    /**
     * Pre-load the client hint storage. Takes a JSON dict, with each key being an origin (RFC 6454 Section 6.2) and each value a comma-separated list of client hint tokens (RFC 8942 Section 3.1, client-hints-infrastructure Section 7.1). Each origin/token-list entry will be parsed and persisted to the Client Hints storage as though the token-list had c...
     * Potential parameters: see description.
     */
    case InitializeClientHintsStorage = "--initialize-client-hints-storage";
    /**
     * Specifies the path to a file containing a Chrome DevTools protocol log. Each line in the log file is expected to be a protocol message in the JSON format. The test runner will use this log file to script the backend for any inspector-protocol tests that run. Usually you would want to run a single test using the log to reproduce timeouts or crashes.
     * Potential parameters: see description.
     */
    case InspectorProtocolLog = "--inspector-protocol-log";
    /**
     * Installs an autogenerated theme based on the given RGB value. The format is "r,g,b", where r, g, b are a numeric values from 0 to 255.
     * Potential parameters: see description.
     */
    case InstallAutogeneratedTheme = "--install-autogenerated-theme";
    /**
     * Causes Chrome to initiate an installation flow for the given app.
     */
    case InstallChromeApp = "--install-chrome-app";
    /**
     * Causes Chrome to install the unsigned Web Bundle at the given path as a developer mode Isolated Web App.
     * Potential parameters: see description.
     */
    case InstallIsolatedWebAppFromFile = "--install-isolated-web-app-from-file";
    /**
     * Causes Chrome to install a developer mode Isolated Web App whose contents are hosted at the given HTTP(S) URL.
     * Potential parameters: see description.
     */
    case InstallIsolatedWebAppFromUrl = "--install-isolated-web-app-from-url";
    /**
     * Decreases delay in uploading installation event logs for integration test.
     */
    case InstallLogFastUploadForTests = "--install-log-fast-upload-for-tests";
    /**
     * Marks a renderer as an Instant process.
     */
    case InstantProcess = "--instant-process";
    /**
     * Specifies manual overrides to the IP endpoint -> IP address space mapping. This allows running local tests against "public" and "local" IP addresses. This switch is specified as a comma-separated list of overrides. Each override is an equals-separated "<endpoint|ip-range>=<address space>" pair. Grammar, in pseudo-BNF format: switch := override-l...
     * Potential parameters: see description.
     */
    case IpAddressSpaceOverrides = "--ip-address-space-overrides";
    /**
     * Overrides the timeout, in seconds, that a child process waits for a connection from the browser before killing itself.
     */
    case IpcConnectionTimeout = "--ipc-connection-timeout";
    /**
     * Dumps IPC messages sent from renderer processes to the browser process to the given directory. Used primarily to gather samples for IPC fuzzing.
     */
    case IpcDumpDirectory = "--ipc-dump-directory";
    /**
     * Specifies the testcase used by the IPC fuzzer.
     */
    case IpcFuzzerTestcase = "--ipc-fuzzer-testcase";
    /**
     * Require dedicated processes for a set of origins, specified as a comma-separated list. For example: --isolate-origins=https://www.foo.com,https://www.bar.com
     * Potential parameters: see description.
     */
    case IsolateOrigins = "--isolate-origins";
    /**
     * Specifies that the browser is running isolated and should not attempt to start a second isolated browser.
     */
    case Isolated = "--isolated";
    /**
     * Enables APIs guarded with the [IsolatedContext] IDL attribute for the given comma-separated list of origins.
     * Potential parameters: see description.
     */
    case IsolatedContextOrigins = "--isolated-context-origins";
    /**
     * Enables/disables javaless renderers based on value given. "enabled" or "disabled" are valid values.
     * Potential parameters: see description.
     */
    case JavalessRenderers = "--javaless-renderers";
    /**
     * Enables experimental Harmony (ECMAScript 6) features.
     */
    case JavascriptHarmony = "--javascript-harmony";
    /**
     * Specifies the flags passed to JS engine.
     */
    case JsFlags = "--js-flags";
    /**
     * Used for testing - keeps browser alive after last browser window closes.
     */
    case KeepAliveForTest = "--keep-alive-for-test";
    /**
     * Enable kiosk mode. Please note this is not Chrome OS kiosk mode.
     */
    case Kiosk = "--kiosk";
    /**
     * Enable automatically pressing the print button in print preview.
     */
    case KioskPrinting = "--kiosk-printing";
    /**
     * Minimum time the kiosk splash screen will be shown in seconds.
     */
    case KioskSplashScreenMinTimeSeconds = "--kiosk-splash-screen-min-time-seconds";
    /**
     * The language file that we want to try to open. Of the form language[-country] where language is the 2 letter code from ISO-639. On Linux, this flag does not work; use the LC_LANG environment variables instead.
     */
    case Lang = "--lang";
    /**
     * Switches to communicate app state information
     */
    case LastLaunchedApp = "--last-launched-app";
    /**
     * Start Chrome in RMA mode. Launches RMA app automatically. kRmaNotAllowed switch takes priority over this one.
     */
    case LaunchRma = "--launch-rma";
    /**
     * Time the browser launched the renderer process (in TimeTicks).
     */
    case LaunchTimeTicks = "--launch-time-ticks";
    /**
     * The integer value of a file descriptor inherited by the mojo_proxy process when launched by its host. This descriptor references a Unix socket which is connected to the legacy client application to be the target of this proxy. Required.
     * Potential parameters: see description.
     */
    case LegacyClientFd = "--legacy-client-fd";
    /**
     * Writes open and installed web apps for each profile to the specified file without launching a new browser window or tab. Pass a absolute file path to specify where to output the information. Can be used together with optional --profile-base-name switch to only write information for a given profile.
     * Potential parameters: see description.
     */
    case ListApps = "--list-apps";
    /**
     * Comma-separated list of paths to apps to load at startup. The first app in the list will be launched.
     * Potential parameters: see description.
     */
    case LoadApps = "--load-apps";
    /**
     * Comma-separated list of paths to extensions to load at startup.
     * Potential parameters: see description.
     */
    case LoadExtension = "--load-extension";
    /**
     * Path to the unpacked test extension to load into guest mode. The extension ID must match kGuestModeTestExtensionId.
     * Potential parameters: see description.
     */
    case LoadGuestModeTestExtension = "--load-guest-mode-test-extension";
    /**
     * Path to the unpacked test extension to load into the signin profile. The ID extension loaded must match kTestSigninProfileExtensionId.
     * Potential parameters: see description.
     */
    case LoadSigninProfileTestExtension = "--load-signin-profile-test-extension";
    /**
     * Flag used to load WebUI files directly from disk instead of pak files. Meant to be used during local development only (requires a local checkout and build), and only works if used along with the GN load_webui_from_disk=true GN flag.
     * Potential parameters: see description.
     */
    case LoadWebuiFromDisk = "--load-webui-from-disk";
    /**
     * Allows the loading predictor to do prefetches to local IP addresses. This is needed for testing as such requests are blocked by default for security.
     */
    case LoadingPredictorAllowLocalRequestForTesting = "--loading-predictor-allow-local-request-for-testing";
    /**
     * Enables the lobster feature.
     */
    case LobsterFeatureKey = "--lobster-feature-key";
    /**
     * If set, Local Network Access (LNA) permissions policy features will be default enabled in all frames, rather than requiring explicit delegation.
     */
    case LocalNetworkAccessPermissionsPolicyDefaultEnabled = "--local-network-access-permissions-policy-default-enabled";
    /**
     * Specifies the local sync backend directory. The name is chosen to mimic user-data-dir etc. This flag only matters if the enable-local-sync-backend flag is present.
     */
    case LocalSyncBackendDir = "--local-sync-backend-dir";
    /**
     * Logs information about all tasks posted with TaskPriority::BEST_EFFORT. Use this to diagnose issues that are thought to be caused by TaskPriority::BEST_EFFORT execution fences. Note: Tasks posted to a non-BEST_EFFORT UpdateableSequencedTaskRunner whose priority is later lowered to BEST_EFFORT are not logged.
     */
    case LogBestEffortTasks = "--log-best-effort-tasks";
    /**
     * Overrides the default file name to use for general-purpose logging (does not affect which events are logged).
     */
    case LogFile = "--log-file";
    /**
     * A switch conveying a handle value for the file to which the service should emit its logs.
     * Potential parameters: see description.
     */
    case LogFileHandle = "--log-file-handle";
    /**
     * A switch conveying the PID of the process in which the log file handle value is valid.
     * Potential parameters: see description.
     */
    case LogFileSource = "--log-file-source";
    /**
     * Logs GPU control list decisions when enforcing blocklist rules.
     * Potential parameters: see description.
     */
    case LogGpuControlListDecisions = "--log-gpu-control-list-decisions";
    /**
     * Sets the minimum log level. Valid values are from 0 to 3: INFO = 0, WARNING = 1, LOG_ERROR = 2, LOG_FATAL = 3.
     * Potential parameters: see description.
     */
    case LogLevel = "--log-level";
    /**
     * Log an error whenever the unload timeout for a render frame is exceeded.
     */
    case LogMissingUnloadAck = "--log-missing-unload-ack";
    /**
     * No description…
     */
    case LogNetLog = "--log-net-log";
    /**
     * Checks and logs double background blur as an error if any.
     */
    case LogOnUiDoubleBackgroundBlur = "--log-on-ui-double-background-blur";
    /**
     * Enables Chrome-as-a-login-manager behavior.
     */
    case LoginManager = "--login-manager";
    /**
     * Specifies the profile to use once a chromeos user is logged in. This parameter is ignored if user goes through login screen since user_id hash defines which profile directory to use. In case of browser restart within active session this parameter is used to pass user_id hash for primary user.
     */
    case LoginProfile = "--login-profile";
    /**
     * Specifies the user which is already logged in.
     */
    case LoginUser = "--login-user";
    /**
     * Specifies the backend server used for lso authentication calls. "https://accounts.google.com".
     */
    case LsoUrl = "--lso-url";
    /**
     * Use in test to override mahi age and country restriction.
     */
    case MahiRestrictionsOverride = "--mahi-restrictions-override";
    /**
     * Indicates whether Chrome should be set as the default browser during installation.
     */
    case MakeChromeDefault = "--make-chrome-default";
    /**
     * Makes Chrome default browser
     */
    case MakeDefaultBrowser = "--make-default-browser";
    /**
     * Whether in hospitality mode
     */
    case ManagedMode = "--managed-mode";
    /**
     * Transform localized strings to be longer, with beginning and end markers to make truncation visually apparent.
     * Potential parameters: see description.
     */
    case MangleLocalizedStrings = "--mangle-localized-strings";
    /**
     * List of comma-separated URLs to mark as present on the password protection allowlist. Note this uses the client-side detection allowlist.
     * Potential parameters: see description.
     */
    case MarkAsAllowlistedForPhishGuard = "--mark_as_allowlisted_for_phish_guard";
    /**
     * List of comma-separated URLs to mark as present on the high-confidence allowlist.
     * Potential parameters: see description.
     */
    case MarkAsAllowlistedForRealTime = "--mark_as_allowlisted_for_real_time";
    /**
     * Command-line flag for caching an artificial blocked enterprise lookup verdict.
     * Potential parameters: see description.
     */
    case MarkAsEnterpriseBlocked = "--mark_as_enterprise_blocked";
    /**
     * Command-line flag for caching an artificial flagged enterprise lookup verdict.
     * Potential parameters: see description.
     */
    case MarkAsEnterpriseWarned = "--mark_as_enterprise_warned";
    /**
     * List of comma-separated URLs to mark as malware for local database checks.
     * Potential parameters: see description.
     */
    case MarkAsMalware = "--mark_as_malware";
    /**
     * Command-line flag for caching an artificial PhishGuard unsafe verdict.
     * Potential parameters: see description.
     */
    case MarkAsPhishGuardPhishing = "--mark_as_phish_guard_phishing";
    /**
     * List of comma-separated URLs to mark as phishing for local database checks.
     * Potential parameters: see description.
     */
    case MarkAsPhishing = "--mark_as_phishing";
    /**
     * Command-line flag for caching an artificial phishing verdict for URL real-time lookups.
     * Potential parameters: see description.
     */
    case MarkAsRealTimePhishing = "--mark_as_real_time_phishing";
    /**
     * List of comma-separated URLs to mark as unwanted software for local database checks.
     * Potential parameters: see description.
     */
    case MarkAsUws = "--mark_as_uws";
    /**
     * Command-line flag for caching an artificial phishing verdict for V5 SearchHashes.
     * Potential parameters: see description.
     */
    case MarkAsV5SearchHashesPhishing = "--mark_as_v5_search_hashes_phishing";
    /**
     * Sets the market URL for Chrome for use in testing.
     * Potential parameters: see description.
     */
    case MarketUrlForTesting = "--market-url-for-testing";
    /**
     * Determines the URL to be used when calling the backend.
     * Potential parameters: see description.
     */
    case MarketingOptInUrl = "--marketing-opt-in-url";
    /**
     * Allows user to override maximum number of active WebGL contexts per renderer process.
     * Potential parameters: see description.
     */
    case MaxActiveWebglContexts = "--max-active-webgl-contexts";
    /**
     * Sets the maximium decoded image size limitation.
     */
    case MaxDecodedImageSizeMb = "--max-decoded-image-size-mb";
    /**
     * Override the maximum framerate as can be specified in calls to getUserMedia. This flag expects a value. Example: --max-gum-fps=17.5
     * Potential parameters: see description.
     */
    case MaxGumFps = "--max-gum-fps";
    /**
     * Sets the width and height above which a composited layer will get tiled.
     */
    case MaxUntiledLayerHeight = "--max-untiled-layer-height";
    /**
     * No description…
     */
    case MaxUntiledLayerWidth = "--max-untiled-layer-width";
    /**
     * Sets the maximum number of WebMediaPlayers allowed per frame.
     * Potential parameters: see description.
     */
    case MaxWebMediaPlayerCount = "--max-web-media-player-count";
    /**
     * Memory pressure switches
     */
    case MemPressureSystemReservedKb = "--mem-pressure-system-reserved-kb";
    /**
     * Indicates the utility process should run with a message loop type of UI.
     */
    case MessageLoopTypeUi = "--message-loop-type-ui";
    /**
     * This is how the metrics client ID is passed from the browser process to its children. With Crashpad, the metrics client ID is distinct from the crash client ID.
     */
    case MetricsClientId = "--metrics-client-id";
    /**
     * Enables the recording of metrics reports but disables reporting. In contrast to kForceEnableMetricsReporting, this executes all the code that a normal client would use for reporting, except the report is dropped rather than sent to the server. This is useful for finding issues in the metrics code during UI and performance tests.
     */
    case MetricsRecordingOnly = "--metrics-recording-only";
    /**
     * Handle to the shared memory segment a child process should use to transmit histograms back to the browser process.
     */
    case MetricsShmemHandle = "--metrics-shmem-handle";
    /**
     * Override the standard time interval between each metrics report upload for UMA and UKM. It is useful to set to a short interval for debugging. Unit in seconds. (The default is 1800 seconds on desktop).
     */
    case MetricsUploadInterval = "--metrics-upload-interval";
    /**
     * Sets the min tile height for GPU raster.
     */
    case MinHeightForGpuRasterTile = "--min-height-for-gpu-raster-tile";
    /**
     * Minimum size for buffer size used for output video frames in FuchsiaVideoDecoder. May be set to avoid re-allocating video buffers when an application upgrades video resolution mid-stream.
     */
    case MinVideoDecoderOutputBufferSize = "--min-video-decoder-output-buffer-size";
    /**
     * Set the default result for MockCertVerifier. This only works in test code.
     */
    case MockCertVerifierDefaultResultForTesting = "--mock-cert-verifier-default-result-for-testing";
    /**
     * Returns the specified mock OTP string value when retrieving OTP tokens. Note: In Actor OTP flows (AttemptOtpFillingTool), if actor::switches::kAttemptOtpFillingToolMockValueSkipsChecks is also present, it takes precedence and additionally bypasses consent and confirmation checks.
     * Potential parameters: see description.
     */
    case MockOtpValue = "--mock-otp-value";
    /**
     * Use a Mojo-based LocalStorage implementation.
     */
    case MojoLocalStorage = "--mojo-local-storage";
    /**
     * Allows setting a different destination ID for connection-monitoring GCM messages. Useful when running against a non-prod management server.
     */
    case MonitoringDestinationId = "--monitoring-destination-id";
    /**
     * Allows explicitly specifying MSE audio/video buffer sizes as megabytes. Default values are 150M for video and 12M for audio.
     * Potential parameters: see description.
     */
    case MseAudioBufferSizeLimitMb = "--mse-audio-buffer-size-limit-mb";
    /**
     * No description…
     */
    case MseVideoBufferSizeLimitMb = "--mse-video-buffer-size-limit-mb";
    /**
     * Allows HTTP URLs for extraction and suggestions during browser testing.
     * Potential parameters: see description.
     */
    case MultistepFilterAllowHttpForTesting = "--multistep-filter-allow-http-for-testing";
    /**
     * Bypass the capability checks for local testing.
     */
    case MultistepFilterBypassCapabilityCheck = "--multistep-filter-bypass-capability-check";
    /**
     * Mutes audio sent to the audio device so it is not audible during automated testing.
     */
    case MuteAudio = "--mute-audio";
    /**
     * Requests a native messaging connection be established between the extension with ID specified by this switch and the native messaging host named by the kNativeMessagingConnectHost switch.
     */
    case NativeMessagingConnectExtension = "--native-messaging-connect-extension";
    /**
     * Requests a native messaging connection be established between the native messaging host named by this switch and the extension with ID specified by kNativeMessagingConnectExtension.
     */
    case NativeMessagingConnectHost = "--native-messaging-connect-host";
    /**
     * If set when kNativeMessagingConnectHost and kNativeMessagingConnectExtension are specified, is reflected to the native messaging host as a command line parameter.
     * Potential parameters: see description.
     */
    case NativeMessagingConnectId = "--native-messaging-connect-id";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case NearbyShareCertificateValidityPeriodHours = "--nearby-share-certificate-validity-period-hours";
    /**
     * Overrides the default device ID to provide a stable ID in test environments. By default we generate a random 10-character string.
     * Potential parameters: see description.
     */
    case NearbyShareDeviceId = "--nearby-share-device-id";
    /**
     * Overrides the default number of private certificates generated. Value must be larger than 0.
     * Potential parameters: see description.
     */
    case NearbyShareNumPrivateCertificates = "--nearby-share-num-private-certificates";
    /**
     * Enables verbose logging level for Nearby Share.
     */
    case NearbyShareVerboseLogging = "--nearby-share-verbose-logging";
    /**
     * Overrides the default URL for Google APIs (https://www.googleapis.com) used by Nearby Share
     * Potential parameters: see description.
     */
    case NearbysharingHttpHost = "--nearbysharing-http-host";
    /**
     * Enable net logging from WebView. This captures network activity for debugging purposes, and stores the files in DevUi.
     */
    case NetLog = "--net-log";
    /**
     * Sets the granularity of events to capture in the network log. The mode can be set to one of the following values: "Default" "IncludeSensitive" "Everything" See the enums of the corresponding name in net_log_capture_mode.h for a description of their meanings.
     * Potential parameters: see description.
     */
    case NetLogCaptureMode = "--net-log-capture-mode";
    /**
     * Specifies the duration (in seconds) for network logging. When this flag is provided with a positive integer value X, Chrome will automatically stop collecting NetLog events after X seconds and flush the log to disk.
     * Potential parameters: see description.
     */
    case NetLogDuration = "--net-log-duration";
    /**
     * Sets the format used for the network log file. Supported values are: "json" "ndjson"
     * Potential parameters: see description.
     */
    case NetLogFileFormat = "--net-log-file-format";
    /**
     * Sets the maximum size, in megabytes. The log file can grow to before older data is overwritten. Do not use this flag if you want an unlimited file size.
     */
    case NetLogMaxSizeMb = "--net-log-max-size-mb";
    /**
     * List of network interfaces to ignore. Ignored interfaces will not be used for network connectivity.
     * Potential parameters: see description.
     */
    case NetifsToIgnore = "--netifs-to-ignore";
    /**
     * Sets the timeout seconds of the network-quiet timers in IdlenessDetector. Used by embedders who want to change the timeout time in order to run web contents on various embedded devices and changeable network bandwidths in different regions. For example, it's useful when using FirstMeaningfulPaint signal to dismiss a splash screen.
     * Potential parameters: see description.
     */
    case NetworkQuietTimeout = "--network-quiet-timeout";
    /**
     * Launches URL in new browser window.
     * Potential parameters: see description.
     */
    case NewWindow = "--new-window";
    /**
     * Disables the default browser check. Useful for UI/browser tests where we want to avoid having the default browser info-bar displayed.
     */
    case NoDefaultBrowserCheck = "--no-default-browser-check";
    /**
     * Start the non-sandboxed GPU process for DX12 and Vulkan info collection immediately after the browser starts. The default is to delay for 120 seconds.
     */
    case NoDelayForDx12VulkanInfoCollection = "--no-delay-for-dx12-vulkan-info-collection";
    /**
     * Disables all experiments set on about:flags. Does not disable about:flags itself. Useful if an experiment makes chrome crash at startup: One can start chrome with --no-experiments, disable the problematic lab at about:flags and then restart chrome without this switch again.
     */
    case NoExperiments = "--no-experiments";
    /**
     * Skip First Run tasks as well as not showing additional dialogs, prompts or bubbles. Suppressing dialogs, prompts, and bubbles is important as this switch is used by automation (including performance benchmarks) where it's important only a browser window is shown. This may not actually be the first run or the What's New page. Its effect can be pa...
     */
    case NoFirstRun = "--no-first-run";
    /**
     * Whether or not the browser should warn if the profile is on a network share. This flag is only relevant for Windows currently.
     */
    case NoNetworkProfileWarning = "--no-network-profile-warning";
    /**
     * A process type that exits cleanly with code 0 without performing work.
     */
    case NoOpForTesting = "--no-op-for-testing";
    /**
     * Do not display header and footer in the printed PDF file.
     */
    case NoPdfHeaderFooter = "--no-pdf-header-footer";
    /**
     * Don't send hyperlink auditing pings
     */
    case NoPings = "--no-pings";
    /**
     * Whether this process should PrefetchVirtualMemory on the contents of Chrome.dll. This warms up the pages in memory to speed up startup but might not be required in later renderers and/or GPU. For experiment info see crbug.com/40234091.
     */
    case NoPreReadMainDll = "--no-pre-read-main-dll";
    /**
     * Don't use a proxy server, always make direct connections. Overrides any other proxy server flags that are passed.
     */
    case NoProxyServer = "--no-proxy-server";
    /**
     * Disables the sandbox for all process types that are normally sandboxed. Meant to be used as a browser-level switch for testing purposes only.
     */
    case NoSandbox = "--no-sandbox";
    /**
     * Does not automatically open a browser window on startup (used when launching Chrome for the purpose of hosting background apps).
     */
    case NoStartupWindow = "--no-startup-window";
    /**
     * Do not use system proxy configuration service.
     */
    case NoSystemProxyConfigService = "--no-system-proxy-config-service";
    /**
     * Disables the unsandboxed zygote. Note: this flag should not be used on most platforms. It is introduced because some platforms (e.g. Cast) have very limited memory and binaries won't be updated when the browser process is running.
     */
    case NoUnsandboxedZygote = "--no-unsandboxed-zygote";
    /**
     * Tell WebXr to assume that it does not support any runtimes.
     */
    case NoXrRuntime = "--no-xr-runtime";
    /**
     * Disables MIT-SHM extension. In use only with Ozone/X11.
     */
    case NoXshm = "--no-xshm";
    /**
     * Disables the use of a zygote process for forking child processes. Instead, child processes will be forked and exec'd directly. Note that --no-sandbox should also be used together with this flag because the sandbox needs the zygote to work.
     */
    case NoZygote = "--no-zygote";
    /**
     * Instructs the zygote to launch without a sandbox. Processes forked from this type of zygote will apply their own custom sandboxes later.
     */
    case NoZygoteSandbox = "--no-zygote-sandbox";
    /**
     * Suppresses all error dialogs when present.
     */
    case Noerrdialogs = "--noerrdialogs";
    /**
     * An optional comma-separated list of IDs of apps that can be used to take notes. If unset, a hardcoded list is used instead.
     * Potential parameters: see description.
     */
    case NoteTakingAppIds = "--note-taking-app-ids";
    /**
     * Overrides the default URL for the Notebook Home WebUI.
     * Potential parameters: see description.
     */
    case NotebookHomeUrl = "--notebook-home-url";
    /**
     * Used in combination with kNotificationLaunchId to specify the inline reply entered in the toast in the Windows Action Center.
     */
    case NotificationInlineReply = "--notification-inline-reply";
    /**
     * Used for launching Chrome when a toast displayed in the Windows Action Center has been activated. Should contain the launch ID encoded by Chrome.
     */
    case NotificationLaunchId = "--notification-launch-id";
    /**
     * The switch to immediately run notification scheduler background task to show notification.
     */
    case NotificationSchedulerImmediateBackgroundTask = "--notification-scheduler-immediate-background-task";
    /**
     * Marks a renderer as a New Tab Page process.
     */
    case NtpProcess = "--ntp-process";
    /**
     * For client applications who expect Mojo invitation attachments to be assigned zero-based 64-bit integral values, this specifies the number of in-use attachments. The names are implicitly sequental integers starting from 0.
     * Potential parameters: see description.
     */
    case NumAttachments = "--num-attachments";
    /**
     * Switches for raster.
     */
    case NumRasterThreads = "--num-raster-threads";
    /**
     * Allows the use of the `testing` reason in offscreen documents.
     */
    case OffscreenDocumentTesting = "--offscreen-document-testing";
    /**
     * Directly launches the Omnibox Everywhere desktop UI widget.
     */
    case OmniboxEverywhere = "--omnibox-everywhere";
    /**
     * Calculate the hash of an MHTML file as it is being saved. The browser process will write the serialized MHTML contents to a file and calculate its hash as it is streamed back from the renderer via a Mojo data pipe.
     */
    case OnTheFlyMhtmlHashComputation = "--on-the-fly-mhtml-hash-computation";
    /**
     * Used to determine if and how on-device handwriting recognition is supported (e.g. via rootfs or downloadable content).
     */
    case OndeviceHandwriting = "--ondevice_handwriting";
    /**
     * No description…
     */
    case OneTimeTokenServiceBaseUrl = "--one-time-token-service-base-url";
    /**
     * Disable metrics consent for testing.
     */
    case OobeDisablePreConsentMetricsForTesting = "--oobe-disable-pre-consent-metrics-for-testing";
    /**
     * Allows the eula url to be overridden for tests.
     * Potential parameters: see description.
     */
    case OobeEulaUrlForTests = "--oobe-eula-url-for-tests";
    /**
     * Indicates that the first user run flow (sequence of OOBE screens after the first user login) should show tablet mode centric screens, even if the device is not in tablet mode.
     */
    case OobeForceTabletFirstRun = "--oobe-force-tablet-first-run";
    /**
     * Indicates that OOBE should be scaled for big displays similar to how Meets app scales UI.
     */
    case OobeLargeScreenSpecialScaling = "--oobe-large-screen-special-scaling";
    /**
     * When present, prints the time it takes for OOBE's frontend to load. See go/oobe-frontend-trace-timings for details.
     */
    case OobePrintFrontendLoadTimings = "--oobe-print-frontend-load-timings";
    /**
     * Specifies directory for screenshots taken with OOBE UI Debugger.
     */
    case OobeScreenshotDir = "--oobe-screenshot-dir";
    /**
     * Shows a11y button on the marketing opt in without visiting gesture navigation screen.
     */
    case OobeShowAccessibilityButtonOnMarketingOptInForTesting = "--oobe-show-accessibility-button-on-marketing-opt-in-for-testing";
    /**
     * Skips OOBE network setup even if there is no internet connection.
     */
    case OobeSkipNetworkSetupForTesting = "--oobe-skip-network-setup-for-testing";
    /**
     * Skips new user check in the personalized recommend apps screen for testing.
     */
    case OobeSkipNewUserCheckForTesting = "--oobe-skip-new-user-check-for-testing";
    /**
     * Skips all other OOBE pages after user login.
     */
    case OobeSkipPostlogin = "--oobe-skip-postlogin";
    /**
     * Returns true if we should skip split modifier check on the split modifier info screen.
     */
    case OobeSkipSplitModifierCheckForTesting = "--oobe-skip-split-modifier-check-for-testing";
    /**
     * Skip to login screen.
     */
    case OobeSkipToLogin = "--oobe-skip-to-login";
    /**
     * Interval at which we check for total time on OOBE.
     */
    case OobeTimerInterval = "--oobe-timer-interval";
    /**
     * Allows the timezone to be overridden on the marketing opt-in screen.
     */
    case OobeTimezoneOverrideForTests = "--oobe-timezone-override-for-tests";
    /**
     * Trigger sync engine initialization timeout in OOBE for testing.
     */
    case OobeTriggerSyncTimeoutForTests = "--oobe-trigger-sync-timeout-for-tests";
    /**
     * Opens the URLs given on the command line as background tabs, without activating or raising the browser window they are added to, so that handing a URL to an already-running browser does not take the user's focus. A window created to host the URLs is still shown and activated, and so is the first tab added to an empty window.
     * Potential parameters: see description.
     */
    case OpenInBackground = "--open-in-background";
    /**
     * Overrides the default enabled library CDM interface version(s) with the one specified with this switch, which will be the only version enabled. For example, on a build where CDM 8, CDM 9 and CDM 10 are all supported (implemented), but only CDM 8 and CDM 9 are enabled by default: --override-enabled-cdm-interface-version=8 : Only CDM 8 is enabled ...
     * Potential parameters: see description.
     */
    case OverrideEnabledCdmInterfaceVersion = "--override-enabled-cdm-interface-version";
    /**
     * Overrides hardware secure codecs support for testing. If specified, real platform hardware secure codecs check will be skipped. Valid codecs are: - video: "vp8", "vp9", "avc1", "hevc", "dolbyvision", "av01" - video that does not support clear lead: `<video>-no-clearlead`, where <video> is from the list above. - audio: "mp4a", "vorbis" Codecs are...
     * Potential parameters: see description.
     */
    case OverrideHardwareSecureCodecsForTesting = "--override-hardware-secure-codecs-for-testing";
    /**
     * Overrides the language detection result determined based on the page contents.
     */
    case OverrideLanguageDetection = "--override-language-detection";
    /**
     * Metrics switches
     */
    case OverrideMetricsUploadUrl = "--override-metrics-upload-url";
    /**
     * Forces the use of software GL instead of hardware gpu for tests.
     */
    case OverrideUseSoftwareGlForTests = "--override-use-software-gl-for-tests";
    /**
     * If set, the overrides the overscan settings on all displays.
     */
    case OverscanInsetsOverride = "--overscan-insets-override";
    /**
     * If set, the overview button will be visible.
     */
    case OverviewButtonForTests = "--overview-button-for-tests";
    /**
     * Specify location for image dumps.
     */
    case OzoneDumpFile = "--ozone-dump-file";
    /**
     * Specifies ozone screen size.
     */
    case OzoneOverrideScreenSize = "--ozone-override-screen-size";
    /**
     * Specify ozone platform implementation to use.
     */
    case OzonePlatform = "--ozone-platform";
    /**
     * Packages an extension to a .crx installable file from a given directory.
     */
    case PackExtension = "--pack-extension";
    /**
     * Optional PEM private key to use in signing packaged .crx.
     */
    case PackExtensionKey = "--pack-extension-key";
    /**
     * No description…
     */
    case PackageName = "--package-name";
    /**
     * No description…
     */
    case PackageVersionName = "--package-version-name";
    /**
     * If enabled, page content annotations requests will not wait for FCP.
     */
    case PageContentAnnotationsSkipFcpWaitForTesting = "--page-content-annotations-skip-fcp-wait-for-testing";
    /**
     * Enables the specific annotation type to run validation at startup after a delay. A comma separated list of inputs can be given as a value which will be used as input for the validation job.
     * Potential parameters: see description.
     */
    case PageContentAnnotationsValidationContentVisibility = "--page-content-annotations-validation-content-visibility";
    /**
     * No description…
     */
    case PageContentAnnotationsValidationStartupDelaySeconds = "--page-content-annotations-validation-startup-delay-seconds";
    /**
     * Writes the output of page content annotation validations to the given file.
     */
    case PageContentAnnotationsValidationWriteToFile = "--page-content-annotations-validation-write-to-file";
    /**
     * Specifies the JSON configuration for PartitionAlloc's scheduler loop quarantine.
     */
    case PartitionAllocSchedulerLoopQuarantine = "--partition-alloc-scheduler-loop-quarantine";
    /**
     * Overrides the default endpoint URL for the Passbox credential store service.
     * Potential parameters: see description.
     */
    case PassboxEndpoint = "--passbox-endpoint";
    /**
     * Specifies which encryption storage backend to use. Possible values are kwallet, kwallet5, gnome-libsecret, basic. Any other value will lead to Chrome detecting the best backend automatically.
     * Potential parameters: see description.
     */
    case PasswordStore = "--password-store";
    /**
     * Renderer process that runs the non-PPAPI PDF plugin.
     */
    case PdfRenderer = "--pdf-renderer";
    /**
     * Tells chrome to interpret events from these devices as pen events. Only available with XInput 2 (i.e. X server 1.8 or above). The id's of the devices can be retrieved from 'xinput list'.
     * Potential parameters: see description.
     */
    case PenDevices = "--pen-devices";
    /**
     * Show the mean value of histograms that native performance tests are monitoring. Note that this is only applicable for PerformanceTest subclasses.
     * Potential parameters: see description.
     */
    case PerfTestPrintUmaMeans = "--perf-test-print-uma-means";
    /**
     * Repeat internable data for each TraceEvent in the perfetto proto format.
     */
    case PerfettoDisableInterning = "--perfetto-disable-interning";
    /**
     * Enables PlayReady CDM and specifies the corresponding key system string.
     * Potential parameters: see description.
     */
    case PlayreadyKeySystem = "--playready-key-system";
    /**
     * Set policy value by command line.
     * Potential parameters: see description.
     */
    case Policy = "--policy";
    /**
     * Replace the original verification_key with the one provided by the command line flag. Can be used only for unit tests or browser tests.
     * Potential parameters: see description.
     */
    case PolicyVerificationKey = "--policy-verification-key";
    /**
     * Post Chromium startup in the WebView constructor. Only has any effect when kStartupNonBlockingWebViewConstructor is enabled.
     */
    case PostChromiumStartupInWebviewConstructor = "--post-chromium-startup-in-webview-constructor";
    /**
     * Causes the browser process to crash very early in startup, just before crashpad (or breakpad) is initialized.
     */
    case PreCrashpadCrashTest = "--pre-crashpad-crash-test";
    /**
     * Used to mock the response received from the Web Permission Prediction Service. Used for testing.
     */
    case PredictionServiceMockLikelihood = "--prediction-service-mock-likelihood";
    /**
     * A directory where Chrome looks for json files describing default/preinstalled web apps. This overrides any default directory to load preinstalled web apps from.
     */
    case PreinstalledWebAppsDir = "--preinstalled-web-apps-dir";
    /**
     * Prevent kiosk autolaunch for testing.
     */
    case PreventKioskAutolaunchForTesting = "--prevent-kiosk-autolaunch-for-testing";
    /**
     * For mobile devices, tests should include a viewport meta tag to specify page dimension adjustments. Omitting the tag can lead to automatic resizing to the standard mobile fallback size (980), which results in content shrinking as it first expands to 980, then scales down to 800 to fit the screen, as observed in the issue at https://crrev.com/c/4...
     */
    case PreventResizingContentsForTesting = "--prevent-resizing-contents-for-testing";
    /**
     * previous-app should be the app that was running when last-launched-app started.
     */
    case PreviousApp = "--previous-app";
    /**
     * Save a PDF file of the loaded page.
     */
    case PrintToPdf = "--print-to-pdf";
    /**
     * Sets the channel from which the PPD files are loaded.
     */
    case PrintingPpdChannel = "--printing-ppd-channel";
    /**
     * Sets Privacy Policy hostname url for testing.
     * Potential parameters: see description.
     */
    case PrivacyPolicyHostForTests = "--privacy-policy-host-for-tests";
    /**
     * Use IPv6 only for privet HTTP.
     */
    case PrivetIpv6Only = "--privet-ipv6-only";
    /**
     * Feature param to pass probability for identity surveys.
     */
    case Probability = "--probability";
    /**
     * Enable the "Process Per Site" process model for all domains. This mode consolidates same-site pages so that they share a single process. More details here: - https://www.chromium.org/developers/design-documents/process-models - The class comment in site_instance.h, listing the supported process models. IMPORTANT: This isn't to be confused with -...
     * Potential parameters: see description.
     */
    case ProcessPerSite = "--process-per-site";
    /**
     * Runs each set of script-connected tabs (i.e., a BrowsingInstance) in its own renderer process. We default to using a renderer process for each site instance (i.e., group of pages from the same registered domain with script connections to each other).
     */
    case ProcessPerTab = "--process-per-tab";
    /**
     * Switch to specify product name used when crash_uploader uploads crash report. Default to "Eureka" if not specified.
     */
    case ProductName = "--product-name";
    /**
     * Outputs the product version information and quit. Used as an internal api to detect the installed version of Chrome on Linux.
     */
    case ProductVersion = "--product-version";
    /**
     * Pass the basename of the profile directory to specify which profile to get information. Only relevant when used with --list-apps switch.
     * Potential parameters: see description.
     */
    case ProfileBaseName = "--profile-base-name";
    /**
     * Selects directory of profile to associate with the first browser launched.
     */
    case ProfileDirectory = "--profile-directory";
    /**
     * Like kProfileDirectory, but selects the profile by email address. If the email is not found in any existing profile, this switch has no effect. If both kProfileDirectory and kProfileEmail are specified, kProfileDirectory takes priority.
     */
    case ProfileEmail = "--profile-email";
    /**
     * Domains and associated SAML attributes for which third-party profile management should be enabled. Input should be in JSON format.
     */
    case ProfileManagementAttributes = "--profile-management-attributes";
    /**
     * If set to "true", the profile requires policy during restart (policy load must succeed, otherwise session restart should fail).
     */
    case ProfileRequiresPolicy = "--profile-requires-policy";
    /**
     * Starts the sampling based profiler for the browser process at startup. This will only work if chrome has been built with the gn arg enable_profiling = true. The output will go to the value of kProfilingFile.
     * Potential parameters: see description.
     */
    case ProfilingAtStart = "--profiling-at-start";
    /**
     * Specifies a location for profiling output. This will only work if chrome has been built with the gyp variable profiling=1 or gn arg enable_profiling=true. {pid} if present will be replaced by the pid of the process. {count} if present will be incremented each time a profile is generated for this process. The default is chrome-profile-{pid} for t...
     * Potential parameters: see description.
     */
    case ProfilingFile = "--profiling-file";
    /**
     * Controls whether profile data is periodically flushed to a file. Normally the data gets written on exit but cases exist where chromium doesn't exit cleanly (especially when using single-process). A time in seconds can be specified.
     */
    case ProfilingFlush = "--profiling-flush";
    /**
     * A list of comma-separated ContentSettingsPattern's to match the scope of ServiceWorkers which are protected and never deleted.
     * Potential parameters: see description.
     */
    case ProtectedServiceWorkers = "--protected-service-workers";
    /**
     * Forces proxy auto-detection.
     */
    case ProxyAutoDetect = "--proxy-auto-detect";
    /**
     * Equivalent to Chrome's --proxy-bypass-list switch.
     * Potential parameters: see description.
     */
    case ProxyBypassList = "--proxy-bypass-list";
    /**
     * Uses the pac script at the given URL
     * Potential parameters: see description.
     */
    case ProxyPacUrl = "--proxy-pac-url";
    /**
     * Uses a specified proxy server, overrides system settings.
     */
    case ProxyServer = "--proxy-server";
    /**
     * Handle to shared memory containing the pseudonymization salt, passed to child processes at launch. See https://crbug.com/40850085.
     */
    case PseudonymizationSaltHandle = "--pseudonymization-salt-handle";
    /**
     * SAML assertion consumer URL, used to detect when Gaia-less SAML flows end (e.g. for SAML managed guest sessions)
     * Potential parameters: see description.
     */
    case PublicAccountsSamlAclUrl = "--public-accounts-saml-acl-url";
    /**
     * Enables or disables pull-to-refresh gesture in response to vertical overscroll. Set the value to '0' to disable the feature, set to '1' to enable it for both touchpad and touchscreen, and set to '2' to enable it only for touchscreen. Defaults to disabled.
     * Potential parameters: see description.
     */
    case PullToRefresh = "--pull-to-refresh";
    /**
     * Specifies the version of the Progressive-Web-App launcher that launched Chrome, used to determine whether to update all launchers. NOTE: changing this switch requires adding legacy handling for the previous method, as older PWA launchers still using this switch will rely on Chrome to update them to use the new method.
     */
    case PwaLauncherVersion = "--pwa-launcher-version";
    /**
     * Adds fake Bluetooth devices to the quick settings menu for UI testing.
     */
    case QsAddFakeBluetoothDevices = "--qs-add-fake-bluetooth-devices";
    /**
     * Adds fake Cast devices to the quick settings menu for UI testing.
     */
    case QsAddFakeCastDevices = "--qs-add-fake-cast-devices";
    /**
     * Forces the quick settings "locale" FeatureTile to show. Normally it only shows in demo mode, which does not work in the emulator.
     */
    case QsShowLocaleTile = "--qs-show-locale-tile";
    /**
     * Specify the QT version to be loaded.
     */
    case QtVersion = "--qt-version";
    /**
     * No description…
     */
    case QuickenSiteSearchExpiryForTesting = "--quicken-site-search-expiry-for-testing";
    /**
     * Raise the timer interrupt frequency in all Chrome processes, for experimental purposes. This feature is needed because as of Windows 10 2004 the scheduling effects of changing the timer interrupt frequency are not global, and this lets us prove/disprove whether this matters. See https://crbug.com/1128917
     */
    case RaiseTimerFrequency = "--raise-timer-frequency";
    /**
     * No description…
     */
    case ReaderModeFeedback = "--reader-mode-feedback";
    /**
     * No description…
     */
    case ReaderModeHeuristics = "--reader-mode-heuristics";
    /**
     * Specifies the URL at which to upload real-time reports.
     * Potential parameters: see description.
     */
    case RealtimeReportingUrl = "--realtime-reporting-url";
    /**
     * Makes pixel tests overwrite their reference if the output and reference don't match.
     */
    case RebaselinePixelTests = "--rebaseline-pixel-tests";
    /**
     * Reduce the accept-language for HTTP header and JS navigator.languages, and only most preferred language: https://github.com/Tanych/accept-language.
     */
    case ReduceAcceptLanguage = "--reduce-accept-language";
    /**
     * Reduce the accept-language for HTTP header, and only send most preferred language in the request header: https://github.com/Tanych/accept-language.
     */
    case ReduceAcceptLanguageHttp = "--reduce-accept-language-http";
    /**
     * Reduce the minor version number in the User-Agent string. This flag implements phase 4 of User-Agent reduction: https://blog.chromium.org/2021/09/user-agent-reduction-origin-trial-and-dates.html.
     * Potential parameters: see description.
     */
    case ReduceUserAgentMinorVersion = "--reduce-user-agent-minor-version";
    /**
     * Forces component extensions' service workers to be re-registered on every load, instead of reusing the registration persisted in the profile.
     */
    case RefreshComponentExtensionServiceWorkers = "--refresh-component-extension-service-workers";
    /**
     * Forces immediate platform policy refresh (not cloud policy) when Chrome is already running. The switch prevents a new browser window from opening and only triggers the policy refresh. Useful for testing and automation to avoid waiting for the next scheduled refresh interval. No-op if Chrome is not already running.
     */
    case RefreshPlatformPolicy = "--refresh-platform-policy";
    /**
     * Makes Chrome register the maximum dark suspend delay possible on Chrome OS i.e. give the device the maximum amount of time to do its work in dark resume as is allowed by the power manager.
     */
    case RegisterMaxDarkSuspendDelay = "--register-max-dark-suspend-delay";
    /**
     * The name of the per-model directory which contains per-region subdirectories with regulatory label files for this model. The per-model directories (if there are any) are located under "/usr/share/chromeos-assets/regulatory_labels/".
     */
    case RegulatoryLabelDir = "--regulatory-label-dir";
    /**
     * A process type (switches::kProcessType) that relaunches the browser. See chrome/browser/mac/relauncher.h.
     */
    case Relauncher = "--relauncher";
    /**
     * Enables web socket connections from the specified origins only. '*' allows any origin.
     */
    case RemoteAllowOrigins = "--remote-allow-origins";
    /**
     * Use the given address instead of the default loopback for accepting remote debugging connections. Note that the remote debugging protocol does not perform any authentication, so exposing it too widely can be a security risk.
     */
    case RemoteDebuggingAddress = "--remote-debugging-address";
    /**
     * Pipe names for the incoming and outbound messages.
     */
    case RemoteDebuggingIoPipes = "--remote-debugging-io-pipes";
    /**
     * Enables remote debug over stdio pipes [in=3, out=4] or over the remote pipes specified in the 'remote-debugging-io-pipes' switch. Optionally, specifies the format for the protocol messages, can be either "JSON" (the default) or "CBOR".
     * Potential parameters: see description.
     */
    case RemoteDebuggingPipe = "--remote-debugging-pipe";
    /**
     * Enables remote debug over HTTP on the specified port.
     */
    case RemoteDebuggingPort = "--remote-debugging-port";
    /**
     * Enables remote debug over HTTP on the specified socket name.
     */
    case RemoteDebuggingSocketName = "--remote-debugging-socket-name";
    /**
     * Provides a list of addresses to discover DevTools remote debugging targets. The format is <host>:<port>,...,<host>:port.
     * Potential parameters: see description.
     */
    case RemoteDebuggingTargets = "--remote-debugging-targets";
    /**
     * Testing delay for reboot command. Useful for tast tests.
     * Potential parameters: see description.
     */
    case RemoteRebootCommandTimeoutInSecondsForTesting = "--remote-reboot-command-timeout-in-seconds-for-testing";
    /**
     * Allows explicitly picking a DRM render node to create gbm_device for rendering.
     */
    case RenderNodeOverride = "--render-node-override";
    /**
     * Causes the process to run as renderer instead of as browser.
     */
    case Renderer = "--renderer";
    /**
     * No description…
     */
    case RendererClientId = "--renderer-client-id";
    /**
     * The contents of this flag are prepended to the renderer command line. Useful values might be "valgrind" or "xterm -e gdb --args".
     * Potential parameters: see description.
     */
    case RendererCmdPrefix = "--renderer-cmd-prefix";
    /**
     * Overrides the default/calculated limit to the number of renderer processes. Very high values for this setting can lead to high memory/resource usage or instability.
     * Potential parameters: see description.
     */
    case RendererProcessLimit = "--renderer-process-limit";
    /**
     * Causes the renderer process to display a dialog on launch. Passing this flag also adds sandbox::policy::kNoSandbox on Windows non-official builds, since that's needed to show a dialog.
     */
    case RendererStartupDialog = "--renderer-startup-dialog";
    /**
     * Block ChildProcessMain thread of the renderer's ChildProcessService until a Java debugger is attached.
     */
    case RendererWaitForJavaDebugger = "--renderer-wait-for-java-debugger";
    /**
     * Parameters for kUIShowCompositedLayerBorders.
     */
    case Renderpass = "--renderpass";
    /**
     * Indicates that all corrupted extensions should be repaired if they are are enabled by policy. This is mainly used after a user data downgrade.
     */
    case RepairAllValidExtensions = "--repair-all-valid-extensions";
    /**
     * Force to report VP9 as an unsupported MIME type.
     */
    case ReportVp9AsAnUnsupportedMimeType = "--report-vp9-as-an-unsupported-mime-type";
    /**
     * Force enable user agent overrides to request desktop sites in Clank.
     */
    case RequestDesktopSites = "--request-desktop-sites";
    /**
     * Network switches
     */
    case RequireWlan = "--require-wlan";
    /**
     * Forces each web test to be run in a new BrowsingInstance. Required for origin isolation web tests where the BrowsingInstance retains state from origin isolation requests, but this flag may benefit other web tests.
     */
    case ResetBrowsingInstanceBetweenTests = "--reset-browsing-instance-between-tests";
    /**
     * Forces a reset of the one-time-randomized FieldTrials on this client, also known as the Chrome Variations state.
     */
    case ResetVariationState = "--reset-variation-state";
    /**
     * Indicates that Chrome was restarted (e.g., after a flag change). This is used to ignore the launch when recording the Launch.Mode2 metric.
     */
    case Restart = "--restart";
    /**
     * Indicates the last session should be restored on startup. This overrides the preferences value. Note that this does not force automatic session restore following a crash, so as to prevent a crash loop. This switch is used to implement support for OS-specific "continue where you left off" functionality on OS X and Windows.
     * Potential parameters: see description.
     */
    case RestoreLastSession = "--restore-last-session";
    /**
     * A switch that controls RestrictBackgroundFetchFromServiceWorker availability via enterprise policy.
     */
    case RestrictBackgroundFetchFromServiceWorker = "--restrict-background-fetch-from-service-worker";
    /**
     * Indicates that reven UI strings and features should be shown.
     * Potential parameters: see description.
     */
    case RevenBranding = "--reven-branding";
    /**
     * The rlz ping delay (in seconds) that overwrites the default value.
     * Potential parameters: see description.
     */
    case RlzPingDelay = "--rlz-ping-delay";
    /**
     * Start Chrome without opening RMA or checking the current RMA state.
     */
    case RmaNotAllowed = "--rma-not-allowed";
    /**
     * Effectively disables pipelining of compositor frame production stages by waiting for each stage to finish before completing a frame.
     */
    case RunAllCompositorStagesBeforeDraw = "--run-all-compositor-stages-before-draw";
    /**
     * Manual tests only run when --run-manual is specified. This allows writing tests that don't run automatically but are still in the same test binary. This is useful so that a team that wants to run a few tests doesn't have to add a new binary that must be compiled on all builds.
     */
    case RunManual = "--run-manual";
    /**
     * Runs Content Shell in web test mode, injecting test-only behaviour for blink web tests.
     */
    case RunWebTests = "--run-web-tests";
    /**
     * Authentication token securely sent to the runtime.
     */
    case RuntimeAuthToken = "--runtime-auth-token";
    /**
     * Specifies the Cast Core runtime gRPC endpoint, --runtime-service-path=<endpoint>.
     * Potential parameters: see description.
     */
    case RuntimeServicePath = "--runtime-service-path";
    /**
     * If present, indicates that the client-side detection allowlist check should be skipped (it is treated as no match).
     * Potential parameters: see description.
     */
    case SafeBrowsingSkipCsdAllowlist = "--safe-browsing-skip-csd-allowlist";
    /**
     * If the switch is present, any high-confidence allowlist check will return that it does not match the allowlist.
     * Potential parameters: see description.
     */
    case SafeBrowsingSkipHighConfidenceAllowlist = "--safe-browsing-skip-high-confidence-allowlist";
    /**
     * The switch added by session_manager daemon when chrome crashes 3 times or more within the first 60 seconds on start. See BrowserJob::ExportArgv in platform2/login_manager/browser_job.cc.
     */
    case SafeMode = "--safe-mode";
    /**
     * Enable Safe Browsing Enhanced Protection.
     */
    case SafebrowsingEnableEnhancedProtection = "--safebrowsing-enable-enhanced-protection";
    /**
     * Command-line flag that reduces the initial delay for Safe Browsing database updates for manual testing purposes.
     * Potential parameters: see description.
     */
    case SafebrowsingFastInitialListsUpdate = "--safebrowsing-fast-initial-lists-update";
    /**
     * List of comma-separated sha256 hashes of executable files which the download-protection service should treat as "dangerous." For a file to show a warning, it also must be considered a dangerous filetype and not be allowlisted otherwise (by signature or URL) and must be on a supported OS. Hashes are in hex. This is used for manual testing when lo...
     * Potential parameters: see description.
     */
    case SafebrowsingManualDownloadBlacklist = "--safebrowsing-manual-download-blacklist";
    /**
     * Indicates that the URL in the command line should open in the active tab instead of a new tab. In case of multiple URLS given as arguments, the first one will replace the active tab.
     * Potential parameters: see description.
     */
    case SameTab = "--same-tab";
    /**
     * Password change url for SAML users.
     * Potential parameters: see description.
     */
    case SamlPasswordChangeUrl = "--saml-password-change-url";
    /**
     * Causes the process to run as a sandbox IPC subprocess.
     */
    case SandboxIpc = "--sandbox-ipc";
    /**
     * Enables saving webpages as MHTML (Webpage, Single) by default, instead of saving as HTML with a directory of sub-resources. (Webpage, Complete). See http://crbug.com/40179885 for how to remove this switch.
     */
    case SavePageAsMhtml = "--save-page-as-mhtml";
    /**
     * Testing grace period for DeviceScheduledReboot policy. Useful for tast tests. See `ShouldSkipRebootDueToGracePeriod` in scheduled_task_util.h.
     */
    case ScheduledRebootGracePeriodInSecondsForTesting = "--scheduled-reboot-grace-period-in-seconds-for-testing";
    /**
     * Override the default scheduling boosting value for urgent tasks. This can be adjusted if a specific chromeos device shows better perf/power ratio (e.g. by running video conference tests). Currently, this values directs to linux scheduler's utilization min clamp. Range is 0(no biased load) ~ 100(mamximum load value).
     * Potential parameters: see description.
     */
    case SchedulerBoostUrgent = "--scheduler-boost-urgent";
    /**
     * Selects the scheduler configuration specified in the parameter.
     */
    case SchedulerConfiguration = "--scheduler-configuration";
    /**
     * Specifies what the default scheduler configuration value is if the user does not set one.
     * Potential parameters: see description.
     */
    case SchedulerConfigurationDefault = "--scheduler-configuration-default";
    /**
     * Specifies the initial screen configuration, or state of all displays, for FakeDisplayDelegate, see class for format details.
     */
    case ScreenConfig = "--screen-config";
    /**
     * Headless screen info in the format: {0,0 800x600}{800,0 600x800}. See //components/headless/screen_info/README.md for more details.
     */
    case ScreenInfo = "--screen-info";
    /**
     * Save a screenshot of the loaded page.
     */
    case Screenshot = "--screenshot";
    /**
     * Overrides the profile country (which is among other things used for search engine choice region checks for example). Intended for testing. Parameter can be one of 3 things: - 2-letter country codes => Will override the profile country - A program name => Will override the country and the program - A specific list override => Will override the pr...
     * Potential parameters: see description.
     */
    case SearchEngineChoiceCountry = "--search-engine-choice-country";
    /**
     * Use a static URL for the logo of the default search engine. Example: https://www.google.com/branding/logo.png
     * Potential parameters: see description.
     */
    case SearchProviderLogoUrl = "--search-provider-logo-url";
    /**
     * Specifies the layout mode and offsets for the secondary display for testing. The format is "<t|r|b|l>,<offset>" where t=TOP, r=RIGHT, b=BOTTOM and L=LEFT. For example, 'r,-100' means the secondary display is positioned on the right with -100 offset. (above than primary)
     * Potential parameters: see description.
     */
    case SecondaryDisplayLayout = "--secondary-display-layout";
    /**
     * Specifies the base URL to contact the secure connect Api.
     * Potential parameters: see description.
     */
    case SecureConnectApiUrl = "--secure-connect-api-url";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case ServiceName = "--service-name";
    /**
     * The name of the |mojo::PendingReceiver<service_manager::mojom::Service>| message pipe handle that is attached to the incoming Mojo invitation received by the service.
     */
    case ServiceRequestAttachmentName = "--service-request-attachment-name";
    /**
     * Type of sandbox to apply to the process running the service, one of the values in the next block.
     * Potential parameters: see description.
     */
    case ServiceSandboxType = "--service-sandbox-type";
    /**
     * Set the parameters for ExtensionURLLoaderThrottleBrowserTest.
     * Potential parameters: see description.
     */
    case SetExtensionThrottleTestParams = "--set-extension-throttle-test-params";
    /**
     * Enables shared array buffer on desktop, gated by an Enterprise Policy.
     */
    case SharedArrayBufferUnrestrictedAccessAllowed = "--shared-array-buffer-unrestricted-access-allowed";
    /**
     * Describes the file descriptors passed to a child process in the following list format: <file_id>:<descriptor_id>,<file_id>:<descriptor_id>,... where <file_id> is an ID string from the manifest of the service being launched and <descriptor_id> is the numeric identifier of the descriptor for the child process can use to retrieve the file descripto...
     * Potential parameters: see description.
     */
    case SharedFiles = "--shared-files";
    /**
     * New modular design for the shelf with apps separated into a hotseat UI and smaller shelf in clamshell mode.
     */
    case ShelfHotseat = "--shelf-hotseat";
    /**
     * Overrides Shill stub behavior. By default, ethernet, wifi and vpn are enabled, and transitions occur instantaneously. Multiple options can be comma separated (no spaces). Note: all options are in the format 'foo=x'. Values are case sensitive and based on Shill names in service_constants.h. See FakeShillManagerClient::SetInitialNetworkState for i...
     * Potential parameters: see description.
     */
    case ShillStub = "--shill-stub";
    /**
     * See https://source.chromium.org/chromium/chromium/src/+/main:chrome/renderer/ash_merge_session_loader_throttle.cc for details on this switch.
     */
    case ShortMergeSessionTimeoutForTest = "--short-merge-session-timeout-for-test";
    /**
     * Adds a DebugBorderDrawQuad to the top of the root RenderPass showing the damage rect after surface aggregation. Note that when enabled this feature sets the entire output rect as damaged after adding the quad to highlight the real damage rect, which could hide damage rect problems.
     */
    case ShowAggregatedDamage = "--show-aggregated-damage";
    /**
     * Annotates forms and fields with Autofill signatures.
     */
    case ShowAutofillSignatures = "--show-autofill-signatures";
    /**
     * Annotates forms with Autofill field type predictions.
     */
    case ShowAutofillTypePredictions = "--show-autofill-type-predictions";
    /**
     * Makes component extensions appear in chrome://settings/extensions.
     */
    case ShowComponentExtensionOptions = "--show-component-extension-options";
    /**
     * Debug visualizations.
     */
    case ShowCompositedLayerBorders = "--show-composited-layer-borders";
    /**
     * Visibly render a border around paint rects in the web page to help debug and study painting behavior. Unlike "show-paint-rects", this only visualizes new contentful paints for each element (e.g. for LCP).
     */
    case ShowContentfulPaintRects = "--show-contentful-paint-rects";
    /**
     * kShowDCLayerDebugBorders shows the debug borders of the overlays and the damage rect after using overlays on Windows. Do not use kShowDCLayerDebugBorders and kShowAggregatedDamage together because kShowAggregatedDamage sets the entire frame as damaged and this causes incorrect damage rect borders after using overlays.
     */
    case ShowDcLayerDebugBorders = "--show-dc-layer-debug-borders";
    /**
     * Draws a heads-up-display showing Frames Per Second as well as GPU memory usage. If you also use --enable-logging=stderr --vmodule="head*=1" then FPS will also be output to the console log.
     * Potential parameters: see description.
     */
    case ShowFpsCounter = "--show-fps-counter";
    /**
     * See kHideIcons.
     */
    case ShowIcons = "--show-icons";
    /**
     * Renders a border that represents the bounding box for the layer's animation.
     */
    case ShowLayerAnimationBounds = "--show-layer-animation-bounds";
    /**
     * Visibly render a border around layout shift rects in the web page to help debug and study layout shifts.
     */
    case ShowLayoutShiftRegions = "--show-layout-shift-regions";
    /**
     * If true, the developer tool overlay will be shown for the login/lock screen. This makes it easier to test layout logic.
     */
    case ShowLoginDevOverlay = "--show-login-dev-overlay";
    /**
     * Show borders around CALayers corresponding to overlays and partial damage.
     */
    case ShowMacOverlayBorders = "--show-mac-overlay-borders";
    /**
     * Enables OOBE UI Debugger for ease of navigation between screens during manual testing. Limited to ChromeOS-on-linux and test images only.
     */
    case ShowOobeDevOverlay = "--show-oobe-dev-overlay";
    /**
     * Enables the QuickStart debugger in OOBE which mimics an Android phone.
     */
    case ShowOobeQuickStartDebugger = "--show-oobe-quick-start-debugger";
    /**
     * Visualize overdraw by color-coding elements based on if they have other elements drawn underneath. This is good for showing where the UI might be doing more rendering work than necessary. The colors are hinting at the amount of overdraw on your screen for each pixel, as follows: True color: No overdraw. Blue: Overdrawn once. Green: Overdrawn twi...
     */
    case ShowOverdrawFeedback = "--show-overdraw-feedback";
    /**
     * Visibly render a border around paint rects in the web page to help debug and study painting behavior.
     */
    case ShowPaintRects = "--show-paint-rects";
    /**
     * Show rects in the HUD around layers whose properties have changed.
     */
    case ShowPropertyChangedRects = "--show-property-changed-rects";
    /**
     * Show rects in the HUD around the screen-space transformed bounds of every layer.
     */
    case ShowScreenspaceRects = "--show-screenspace-rects";
    /**
     * Show rects in the HUD around damage as it is recorded into each render surface.
     */
    case ShowSurfaceDamageRects = "--show-surface-damage-rects";
    /**
     * Draws a circle at each touch point, similar to the Android OS developer option "Show taps".
     */
    case ShowTaps = "--show-taps";
    /**
     * Enables NTP modules on the signed out user experience. Used for perf tests, which do not support sign-in.
     */
    case SignedOutNtpModules = "--signed-out-ntp-modules";
    /**
     * Does not show an infobar when an extension attaches to a page using chrome.debugger page. Required to attach to extension background pages.
     */
    case SilentDebuggerExtensionApi = "--silent-debugger-extension-api";
    /**
     * Causes Chrome to launch without opening any windows by default. Useful if one wishes to use Chrome as an ash server.
     */
    case SilentLaunch = "--silent-launch";
    /**
     * Sets the BrowsingDataLifetime policy to a very short value (shorter than normally possible) for testing purposes.
     * Potential parameters: see description.
     */
    case SimulateBrowsingDataLifetime = "--simulate-browsing-data-lifetime";
    /**
     * Simulates a critical update being available.
     */
    case SimulateCriticalUpdate = "--simulate-critical-update";
    /**
     * Sets the IdleTimeout policy to a very short value (shorter than normally possible) for testing purposes.
     * Potential parameters: see description.
     */
    case SimulateIdleTimeout = "--simulate-idle-timeout";
    /**
     * Causes the browser to simulate a screen lock event shortly after startup. Optional value specifies the delay in seconds (defaults to 5). Used for manual testing of Smart Restart.
     * Potential parameters: see description.
     */
    case SimulateLockScreenSmartRestart = "--simulate-lock-screen-smart-restart";
    /**
     * Simulates that current version is outdated.
     */
    case SimulateOutdated = "--simulate-outdated";
    /**
     * Simulates that current version is outdated and auto-update is off.
     */
    case SimulateOutdatedNoAu = "--simulate-outdated-no-au";
    /**
     * Simulates a GoogleUpdateErrorCode error by the update check. Must be supplied with |kSimulateUpdateHresult| switch.
     */
    case SimulateUpdateErrorCode = "--simulate-update-error-code";
    /**
     * Simulates a specific HRESULT error code returned by the update check. If the switch value is not specified (as hex) then it defaults to E_FAIL.
     * Potential parameters: see description.
     */
    case SimulateUpdateHresult = "--simulate-update-hresult";
    /**
     * Simulates an update being available.
     */
    case SimulateUpgrade = "--simulate-upgrade";
    /**
     * Runs the renderer and plugins in the same process as the browser
     */
    case SingleProcess = "--single-process";
    /**
     * Flag to run all tests and the launcher in a single process. Useful for debugging a specific test in a debugger.
     */
    case SingleProcessTests = "--single-process-tests";
    /**
     * Enforces a one-site-per-process security policy: * Each renderer process, for its whole lifetime, is dedicated to rendering pages for just one site. * Thus, pages from different sites are never in the same process. * A renderer process's access rights are restricted based on its site. * All cross-site navigations force process swaps. * <iframe>s...
     */
    case SitePerProcess = "--site-per-process";
    /**
     * Specifies the max number of bytes that should be used by the skia font cache. If the cache needs to allocate more, skia will purge previous entries.
     * Potential parameters: see description.
     */
    case SkiaFontCacheLimitMb = "--skia-font-cache-limit-mb";
    /**
     * Specify which Dawn backend to use for Skia Graphite.
     */
    case SkiaGraphiteDawnBackend = "--skia-graphite-dawn-backend";
    /**
     * Specify using Skia Graphite with native Vulkan backend.
     */
    case SkiaGraphiteVulkanBackend = "--skia-graphite-vulkan-backend";
    /**
     * Specifies the max number of bytes that should be used by the skia resource cache. The previous entries are purged from the cache when the memory useage exceeds this limit.
     * Potential parameters: see description.
     */
    case SkiaResourceCacheLimitMb = "--skia-resource-cache-limit-mb";
    /**
     * No description…
     */
    case SkillsV2Origin = "--skills-v2-origin";
    /**
     * Disables online sign-in enforcement in tast tests.
     */
    case SkipForceOnlineSigninForTesting = "--skip-force-online-signin-for-testing";
    /**
     * Skip multidevice setup screen during tast tests.
     */
    case SkipMultideviceScreen = "--skip-multidevice-screen";
    /**
     * Used to skip the threshold duration that the reorder nudge has to show before the nudge is considered as shown.
     */
    case SkipReorderNudgeShowThresholdDuration = "--skip-reorder-nudge-show-threshold-duration";
    /**
     * Parameter to skip the Gemini Live FRE intro.
     */
    case SkipIntro = "--skip_intro";
    /**
     * Re-draw everything multiple times to simulate a much slower machine. Give a slow down factor to cause renderer to take that many times longer to complete, such as --slow-down-compositing-scale-factor=2.
     * Potential parameters: see description.
     */
    case SlowDownCompositingScaleFactor = "--slow-down-compositing-scale-factor";
    /**
     * Re-rasters everything multiple times to simulate a much slower machine. Give a scale factor to cause raster to take that many times longer to complete, such as --slow-down-raster-scale-factor=25.
     * Potential parameters: see description.
     */
    case SlowDownRasterScaleFactor = "--slow-down-raster-scale-factor";
    /**
     * Sends test messages on first call to RequestUpdate (stub only).
     */
    case SmsTestMessages = "--sms-test-messages";
    /**
     * When rendezvousing with an existing process, used to indicate that the StartupInfoW of the new Chrome process had dwFlags == STARTF_TITLEISAPPID. This is used to record launch metrics.
     * Potential parameters: see description.
     */
    case SourceAppId = "--source-app-id";
    /**
     * When rendezvousing with an existing process, used to pass the path of the shortcut that launched the new Chrome process. This is used to record launch metrics.
     * Potential parameters: see description.
     */
    case SourceShortcut = "--source-shortcut";
    /**
     * Specifies the origin location of the shortcut that launched Chrome (e.g. desktop, start-menu, taskbar). Used to record launch metrics when launched with an AppId.
     */
    case SourceShortcutLocation = "--source-shortcut-location";
    /**
     * Causes SSL key material to be logged to the specified file for debugging purposes. See https://developer.mozilla.org/en-US/docs/Mozilla/Projects/NSS/Key_Log_Format for the format.
     */
    case SslKeyLogFile = "--ssl-key-log-file";
    /**
     * Specifies the maximum SSL/TLS version ("tls1.2" or "tls1.3").
     */
    case SslVersionMax = "--ssl-version-max";
    /**
     * Specifies the minimum SSL/TLS version ("tls1.2" or "tls1.3").
     */
    case SslVersionMin = "--ssl-version-min";
    /**
     * If true, the time dependent views (such as the time view) show with the predefined fixed time.
     */
    case StabilizeTimeDependentViewForTests = "--stabilize-time-dependent-view-for-tests";
    /**
     * This makes us disable some web-platform runtime features so that we test content_shell as if it was a stable release. It is only followed when kRunWebTest is set. For the features' level, see third_party/blink/renderer/platform/RuntimeEnabledFeatures.md
     */
    case StableReleaseMode = "--stable-release-mode";
    /**
     * Specifies if the browser should start in fullscreen mode, like if the user had pressed F11 right after startup.
     */
    case StartFullscreen = "--start-fullscreen";
    /**
     * Starts the browser maximized, regardless of any previous settings.
     */
    case StartMaximized = "--start-maximized";
    /**
     * Starts the stack sampling profiler in the child process.
     */
    case StartStackProfiler = "--start-stack-profiler";
    /**
     * Identifies Chrome instances that start in foreground mode at startup to record related metrics.
     */
    case StartupForegroundLaunch = "--startup-foreground-launch";
    /**
     * Enables non-blocking WebView constructor.
     */
    case StartupNonBlockingWebviewConstructor = "--startup-non-blocking-webview-constructor";
    /**
     * Interval, in minutes, used for storage pressure notification throttling. Useful for developers testing applications that might use non-trivial amounts of disk space.
     */
    case StoragePressureNotificationInterval = "--storage-pressure-notification-interval";
    /**
     * All switches in alphabetical order. The switches should be documented alongside the definition of their values in the .cc file.
     * Potential parameters: see description.
     */
    case SubprocHeapProfiling = "--subproc-heap-profiling";
    /**
     * If set, the device will be forced to stay in clamshell UI mode but screen auto rotation will be supported. E.g, chromebase device Dooly.
     */
    case SupportsClamshellAutoRotation = "--supports-clamshell-auto-rotation";
    /**
     * Hides all Message Center notification popups (toasts). Used for testing.
     */
    case SuppressMessageCenterPopups = "--suppress-message-center-popups";
    /**
     * Suppresses GL_DEBUG_TYPE_PERFORMANCE log messages for web tests that can get sent to the JS console and cause unnecessary test failures due test output log expectation comparisons.
     */
    case SuppressPerformanceLogs = "--suppress-performance-logs";
    /**
     * System info file path. Default is an empty string, which means that dummy info will be used.
     * Potential parameters: see description.
     */
    case SysInfoFilePath = "--sys-info-file-path";
    /**
     * Enforce system audio echo cancellation.
     */
    case SystemAecEnabled = "--system-aec-enabled";
    /**
     * This flag sets the checkboxes for sharing system audio during window or screen capture to on by default. It is primarily intended to be used for tests.
     */
    case SystemAudioCaptureDefaultChecked = "--system-audio-capture-default_checked";
    /**
     * Used by FakeDebugDaemonClient to specify that the system is running in dev mode when running in a Linux environment. The dev mode probing is done by session manager.
     */
    case SystemDeveloperMode = "--system-developer-mode";
    /**
     * Specifies system font family name. Improves determinism when rendering pages in headless mode.
     */
    case SystemFontFamily = "--system-font-family";
    /**
     * The number of pixels from the very top or bottom of the screen to consider as a valid origin for the top or bottom swipe gesture. Overrides the default value in cast_system_gesture_handler.cc.
     * Potential parameters: see description.
     */
    case SystemGestureStartHeight = "--system-gesture-start-height";
    /**
     * UI switches
     */
    case SystemGestureStartWidth = "--system-gesture-start-width";
    /**
     * Frequency in Milliseconds for system log uploads. Should only be used for testing purposes.
     */
    case SystemLogUploadFrequency = "--system-log-upload-frequency";
    /**
     * This flag sets the checkboxes for sharing audio during tab capture to off by default. It is primarily intended to be used for tests.
     */
    case TabCaptureAudioDefaultUnchecked = "--tab-capture-audio-default-unchecked";
    /**
     * Allows web tests to specify the target device scale for the test cases.
     */
    case TargetDeviceScaleForTesting = "--target-device-scale-for-testing";
    /**
     * No description…
     */
    case TaskDefinitionFile = "--task-definition-file";
    /**
     * Specifies directory for the Telemetry System Web Extension.
     */
    case TelemetryExtensionDir = "--telemetry-extension-dir";
    /**
     * When running certain tests that spawn child processes, this switch indicates to the test framework that the current process is a child process.
     */
    case TestChildProcess = "--test-child-process";
    /**
     * Enables testing for encryption migration UI.
     */
    case TestEncryptionMigrationUi = "--test-encryption-migration-ui";
    /**
     * Flag used for Linux tests: for desktop GL bindings, try to load this GL library first, but fall back to regular library if loading fails.
     */
    case TestGlLib = "--test-gl-lib";
    /**
     * Maximum number of tests to run in a single batch.
     * Potential parameters: see description.
     */
    case TestLauncherBatchLimit = "--test-launcher-batch-limit";
    /**
     * Sets defaults desirable for the continuous integration bots, e.g. parallel test execution and test retries.
     */
    case TestLauncherBotMode = "--test-launcher-bot-mode";
    /**
     * Makes it possible to debug the launcher itself. By default the launcher automatically switches to single process mode when it detects presence of debugger.
     */
    case TestLauncherDebugLauncher = "--test-launcher-debug-launcher";
    /**
     * List of paths to files (separated by ';') containing test filters (one pattern per line).
     * Potential parameters: see description.
     */
    case TestLauncherFilterFile = "--test-launcher-filter-file";
    /**
     * Force running all requested tests and retries even if too many test errors occur.
     */
    case TestLauncherForceRunBrokenTests = "--test-launcher-force-run-broken-tests";
    /**
     * Whether the test launcher should launch in "interactive mode", which disables timeouts (and may have other effects for specific test types).
     */
    case TestLauncherInteractive = "--test-launcher-interactive";
    /**
     * Number of parallel test launcher jobs.
     * Potential parameters: see description.
     */
    case TestLauncherJobs = "--test-launcher-jobs";
    /**
     * Path to list of compiled in tests.
     * Potential parameters: see description.
     */
    case TestLauncherListTests = "--test-launcher-list-tests";
    /**
     * Path to test results file in our custom test launcher format.
     * Potential parameters: see description.
     */
    case TestLauncherOutput = "--test-launcher-output";
    /**
     * Maximum output bytes allowed from a single test. Exceeding this limit results in truncating the output and failing the test.
     */
    case TestLauncherOutputBytesLimit = "--test-launcher-output-bytes-limit";
    /**
     * Causes the test launcher to print information about leaked files and/or directories in child process's temporary directories.
     */
    case TestLauncherPrintTempLeaks = "--test-launcher-print-temp-leaks";
    /**
     * Flag controlling when test stdio is displayed as part of the launcher's standard output.
     */
    case TestLauncherPrintTestStdio = "--test-launcher-print-test-stdio";
    /**
     * Print timestamps in test launcher. This is helpful for debugging test slowness. Currently it prints out the following log: * The time at the end of each test. * The time while waiting for a test to run. Using this flag helps you answer questions like "how long did it take to run the first 10000 tests". Please only keep this flag on builders temp...
     */
    case TestLauncherPrintTimestamps = "--test-launcher-print-timestamps";
    /**
     * Print a writable path and exit (for internal use).
     * Potential parameters: see description.
     */
    case TestLauncherPrintWritablePath = "--test-launcher-print-writable-path";
    /**
     * Indicate how many retries are left. Tests in general should not pass in this flag. This flag is used for launcher to pass retries-left information to the runner process.
     */
    case TestLauncherRetriesLeft = "--test-launcher-retries-left";
    /**
     * These two flags has the same effect, but don't use them at the same time. And isolated-script-test-launcher-retry-limit is preferred in the future. Maximum number of times to retry a test after failure.
     * Potential parameters: see description.
     */
    case TestLauncherRetryLimit = "--test-launcher-retry-limit";
    /**
     * Index of the test shard to run, starting from 0 (first shard) to total shards minus one (last shard).
     */
    case TestLauncherShardIndex = "--test-launcher-shard-index";
    /**
     * Path to test results file with all the info from the test launcher.
     * Potential parameters: see description.
     */
    case TestLauncherSummaryOutput = "--test-launcher-summary-output";
    /**
     * Limit of test part results in the output. Default limit is 10. Negative value will completely disable limit.
     * Potential parameters: see description.
     */
    case TestLauncherTestPartResultsLimit = "--test-launcher-test-part-results-limit";
    /**
     * Time (in milliseconds) that the tests should wait before timing out.
     */
    case TestLauncherTimeout = "--test-launcher-timeout";
    /**
     * Total number of shards. Must be the same for all shards.
     * Potential parameters: see description.
     */
    case TestLauncherTotalShards = "--test-launcher-total-shards";
    /**
     * Path where to save a trace of test launcher's execution.
     * Potential parameters: see description.
     */
    case TestLauncherTrace = "--test-launcher-trace";
    /**
     * Custom delay for memory log. This should be used only for testing purpose.
     */
    case TestMemoryLogDelayInMinutes = "--test-memory-log-delay-in-minutes";
    /**
     * Passes the name of the current running automated test to Chrome.
     */
    case TestName = "--test-name";
    /**
     * Register the provided scheme as a standard scheme.
     */
    case TestRegisterStandardScheme = "--test-register-standard-scheme";
    /**
     * No description…
     */
    case TestThirdPartyCookiePhaseout = "--test-third-party-cookie-phaseout";
    /**
     * No description…
     */
    case TestTinyTimeout = "--test-tiny-timeout";
    /**
     * Type of the current test harness ("browser" or "ui" or "gpu").
     */
    case TestType = "--test-type";
    /**
     * Enables the wallpaper picker to fetch images from the test server.
     */
    case TestWallpaperServer = "--test-wallpaper-server";
    /**
     * Tells the Chromebook to scan for a tethering host even if there is already a wired connection. This allows end-to-end tests to be deployed over ethernet without that connection preventing scans and thereby blocking the testing of cases with no preexisting connection. Should be used only for testing.
     */
    case TetherHostScansIgnoreWiredConnections = "--tether-host-scans-ignore-wired-connections";
    /**
     * Overrides Tether with stub service. Provide integer arguments for the number of fake networks desired, e.g. 'tether-stub=2'.
     * Potential parameters: see description.
     */
    case TetherStub = "--tether-stub";
    /**
     * No description…
     */
    case TextContrast = "--text-contrast";
    /**
     * No description…
     */
    case TextGamma = "--text-gamma";
    /**
     * Overrides the Doodle URL to use for third-party search engines. Testing? Try: https://www.gstatic.com/chrome/ntp/doodle_test/third_party_simple.json https://www.gstatic.com/chrome/ntp/doodle_test/third_party_animated.json
     * Potential parameters: see description.
     */
    case ThirdPartyDoodleUrl = "--third-party-doodle-url";
    /**
     * Issues a stop after the specified number of milliseconds. This cancels all navigation and causes the DOMContentLoaded event to fire.
     * Potential parameters: see description.
     */
    case Timeout = "--timeout";
    /**
     * Tint composited color.
     */
    case TintCompositedContent = "--tint-composited-content";
    /**
     * Modulates the debug compositor tint color so that damage and page flip updates are made clearly visible. This feature was useful in determining the root cause of https://b.corp.google.com/issues/183260320 . The tinting flag "tint-composited-content" must also be enabled for this flag to used.
     */
    case TintCompositedContentModulate = "--tint-composited-content-modulate";
    /**
     * Tint `SwapChainPresenter` with the following colors: - Decode swap chain: blue - VP blit: magenta - VP blit w/ staging texture: orange - MF proxy surface: green This is similar to `HKLM\Software\Microsoft\Windows\DWM` `OverlayTestMode=1` in DWM, but to help understand `SwapChainPresenter` state.
     * Potential parameters: see description.
     */
    case TintDcLayer = "--tint-dc-layer";
    /**
     * TLS 1.3 mode for |kSSLVersionMax| and |kSSLVersionMin| switches.
     */
    case Tls13 = "--tls1.3";
    /**
     * Controls touch-optimized UI layout for top chrome.
     */
    case TopChromeTouchUi = "--top-chrome-touch-ui";
    /**
     * A switch passed to renderer processes hosting Top Chrome WebUI.
     */
    case TopChromeWebui = "--top-chrome-webui";
    /**
     * Percentage of the browser controls need to be hidden before they will auto hide.
     */
    case TopControlsHideThreshold = "--top-controls-hide-threshold";
    /**
     * Percentage of the browser controls need to be shown before they will auto show.
     */
    case TopControlsShowThreshold = "--top-controls-show-threshold";
    /**
     * Tells chrome to interpret events from these devices as touch events. Only available with XInput 2 (i.e. X server 1.8 or above). The id's of the devices can be retrieved from 'xinput list'.
     * Potential parameters: see description.
     */
    case TouchDevices = "--touch-devices";
    /**
     * Enable support for touch event feature detection.
     */
    case TouchEvents = "--touch-events";
    /**
     * Controls how text selection granularity changes when touch text selection handles are dragged. Should be "character" or "direction". If not specified, the platform default is used.
     */
    case TouchSelectionStrategy = "--touch-selection-strategy";
    /**
     * Overrides touch slop distance for gesture detection. The touch slop distance is the maximum distance from the starting point of a touch sequence that a gesture can travel before it can no longer be considered a tap. Scroll gestures can only begin after this distance has been travelled. The switch value is a floating point number that is interpre...
     * Potential parameters: see description.
     */
    case TouchSlopDistance = "--touch-slop-distance";
    /**
     * Chromebases' touchscreens can be used to wake from suspend, unlike the touchscreens on other Chrome OS devices. If set, the touchscreen is kept enabled while the screen is off so that it can be used to turn the screen back on after it has been turned off for inactivity but before the system has suspended.
     */
    case TouchscreenUsableWhileScreenOff = "--touchscreen-usable-while-screen-off";
    /**
     * Enables TPM selection in runtime.
     */
    case TpmIsDynamic = "--tpm-is-dynamic";
    /**
     * Handle to the shared memory segment a child process should use to transmit tracing data back to the tracing service. This flag allows tracing to be recorded before sandbox setup.
     */
    case TraceBufferHandle = "--trace-buffer-handle";
    /**
     * Enables startup tracing by passing a file path containing the chrome Json tracing config as an argument. This flag will be ignored if --trace-startup is provided.
     * Potential parameters: see description.
     */
    case TraceConfigFile = "--trace-config-file";
    /**
     * Causes TRACE_EVENT flags to be recorded from startup, passing a SMB handle containing the serialized perfetto config. This flag will be ignored if --trace-startup is provided.
     */
    case TraceConfigHandle = "--trace-config-handle";
    /**
     * Enables startup tracing by passing the perfetto config as an argument. The config is a base64 encoded proto `perfetto.protos.TraceConfig` defined in third_party/perfetto/protos/perfetto/config/trace_config.proto. This flag will be ignored if --trace-startup is provided.
     */
    case TracePerfettoConfig = "--trace-perfetto-config";
    /**
     * Enables startup tracing by passing a file path containing the perfetto config as an argument. The config is a serialized or base64 encoded proto `perfetto.protos.TraceConfig` defined in third_party/perfetto/protos/perfetto/config/trace_config.proto. This flag will be ignored if --trace-startup is provided.
     * Potential parameters: see description.
     */
    case TracePerfettoConfigFile = "--trace-perfetto-config-file";
    /**
     * Child process track uuid used by perfetto; this is chosen by the browser process and sent to child processes to get predictable track uuid.
     */
    case TraceProcessTrackUuid = "--trace-process-track-uuid";
    /**
     * Configures the size of the shared memory buffer used for tracing. Value is provided in kB. Defaults to 4096. Should be a multiple of the SMB page size (currently 32kB on Desktop or 4kB on Android).
     * Potential parameters: see description.
     */
    case TraceSmbSize = "--trace-smb-size";
    /**
     * Causes TRACE_EVENT flags to be recorded from startup. Optionally, can specify the specific trace categories to include (e.g. --trace-startup=base,net) otherwise, all events are recorded. Setting this flag results in the first call to BeginTracing() to receive all trace events since startup. Historically, --trace-startup was used for browser star...
     * Potential parameters: see description.
     */
    case TraceStartup = "--trace-startup";
    /**
     * Sets the time in seconds until startup tracing ends. If omitted: - if --trace-startup is specified, a default of 5 seconds is used. - if --enable-tracing is specified, tracing lasts until the browser is closed. Has no effect otherwise.
     */
    case TraceStartupDuration = "--trace-startup-duration";
    /**
     * If supplied, sets the file which startup tracing will be stored into, if omitted the default will be used "chrome.pftrace" in the current directory. Has no effect unless --trace-startup is also supplied. Example: --trace-startup --trace-startup-file=/tmp/trace_event.log As a special case, can be set to 'none' - this disables automatically saving...
     * Potential parameters: see description.
     */
    case TraceStartupFile = "--trace-startup-file";
    /**
     * Sets the output format for the trace, valid values are "json" and "proto". If not set, the current default is "proto". "proto", unlike json, supports writing the trace into the output file incrementally and is more likely to retain more data if the browser process unexpectedly terminates. Ignored if "trace-startup-owner" is not "controller".
     * Potential parameters: see description.
     */
    case TraceStartupFormat = "--trace-startup-format";
    /**
     * Specifies the coordinator of the startup tracing session. If the legacy tracing backend is used instead of perfetto, providing this flag is not necessary. Valid values: 'controller', 'devtools', or 'system'. Defaults to 'controller'. If 'controller' is specified, the session is controlled and stopped via the TracingController (e.g. to implement ...
     * Potential parameters: see description.
     */
    case TraceStartupOwner = "--trace-startup-owner";
    /**
     * If supplied, sets the tracing record mode and options; otherwise, the default "record-until-full" mode will be used.
     */
    case TraceStartupRecordMode = "--trace-startup-record-mode";
    /**
     * Sends trace events from these categories to a file. --trace-to-file on its own sends to default categories.
     */
    case TraceToFile = "--trace-to-file";
    /**
     * Specifies the file name for --trace-to-file. If unspecified, it will go to a default file name.
     */
    case TraceToFileName = "--trace-to-file-name";
    /**
     * Overrides the URL from which the translate ranker model is downloaded.
     * Potential parameters: see description.
     */
    case TranslateRankerModelUrl = "--translate-ranker-model-url";
    /**
     * Overrides the default server used for Google Translate.
     */
    case TranslateScriptUrl = "--translate-script-url";
    /**
     * Overrides security-origin with which Translate runs in an isolated world.
     */
    case TranslateSecurityOrigin = "--translate-security-origin";
    /**
     * Switch values
     * Potential parameters: see description.
     */
    case True = "--true";
    /**
     * Identifies a list of download sources as trusted, but only if proper group policy is set.
     * Potential parameters: see description.
     */
    case TrustedDownloadSources = "--trusted-download-sources";
    /**
     * Instead of always using the hardware channel layout, check if a driver supports the source channel layout. Avoids outputting empty channels and permits drivers to enable stereo to multichannel expansion. Kept behind a flag since some drivers lie about supported layouts and hang when used. See http://crbug.com/259165 for more details.
     */
    case TrySupportedChannelLayouts = "--try-supported-channel-layouts";
    /**
     * Specifies the TalkToChrome bundle URL.
     * Potential parameters: see description.
     */
    case TtcBundleUrl = "--ttc-bundle-url";
    /**
     * Flags spied upon from other layers.
     */
    case Type = "--type";
    /**
     * Disable partial swap which is needed for some OpenGL drivers / emulators.
     */
    case UiDisablePartialSwap = "--ui-disable-partial-swap";
    /**
     * No description…
     */
    case UiDisableZeroCopy = "--ui-disable-zero-copy";
    /**
     * No description…
     */
    case UiEnableZeroCopy = "--ui-enable-zero-copy";
    /**
     * No description…
     */
    case UiShowCompositedLayerBorders = "--ui-show-composited-layer-borders";
    /**
     * No description…
     */
    case UiShowFpsCounter = "--ui-show-fps-counter";
    /**
     * No description…
     */
    case UiShowLayerAnimationBounds = "--ui-show-layer-animation-bounds";
    /**
     * No description…
     */
    case UiShowPaintRects = "--ui-show-paint-rects";
    /**
     * No description…
     */
    case UiShowPropertyChangedRects = "--ui-show-property-changed-rects";
    /**
     * No description…
     */
    case UiShowSurfaceDamageRects = "--ui-show-surface-damage-rects";
    /**
     * No description…
     */
    case UiSlowAnimations = "--ui-slow-animations";
    /**
     * Specify the toolkit used to construct the Linux GUI.
     */
    case UiToolkit = "--ui-toolkit";
    /**
     * Overrides the URL of the server that UKM reports are uploaded to. This can only be used in debug builds.
     * Potential parameters: see description.
     */
    case UkmServerUrl = "--ukm-server-url";
    /**
     * Overrides the URL of the server that UMA reports are uploaded to when the connection to the default secure URL fails (see |kUmaServerUrl|). This can only be used in debug builds.
     * Potential parameters: see description.
     */
    case UmaInsecureServerUrl = "--uma-insecure-server-url";
    /**
     * Overrides the URL of the server that UMA reports are uploaded to. This can only be used in debug builds.
     * Potential parameters: see description.
     */
    case UmaServerUrl = "--uma-server-url";
    /**
     * A switch that indicates that the service is running on behalf of an unattended test (i.e., one for which CHROME_HEADLESS is set in its environment block).
     */
    case UnattendedTest = "--unattended-test";
    /**
     * Enables debug mode for unbounded windows (draws a red border).
     */
    case UnboundedWindowDebug = "--unbounded-window-debug";
    /**
     * Shows all Bluetooth devices in UI (System Tray/Settings Page.)
     */
    case UnfilteredBluetoothDevices = "--unfiltered-bluetooth-devices";
    /**
     * Runs un-installation steps that were done by chrome first-run.
     */
    case Uninstall = "--uninstall";
    /**
     * Specifies that the WebApp with the specified id should be uninstalled.
     */
    case UninstallAppId = "--uninstall-app-id";
    /**
     * When switches::kProcessType is switches::kCodeSignCloneCleanupProcess this switch is required. The value must be the unique suffix portion of the temporary directory that contains the clone. The full path will be reconstructed by the cleanup process.
     * Potential parameters: see description.
     */
    case UniqueTempDirSuffix = "--unique-temp-dir-suffix";
    /**
     * Specifies a path to a JSON file containing custom eligibility history to override `prefs::kUniversalOptOutEligibilityHistory` for testing. The JSON file must contain a dictionary with the following format: { "universal_optout.eligibility_history": { "YYYY-MM-DD": true, "YYYY-MM-DD": false, ... } }
     * Potential parameters: see description.
     */
    case UniversalOptoutHistoryJsonPath = "--universal-optout-history-json-path";
    /**
     * Overrides per-origin quota settings to unlimited storage for any apps/origins. This should be used only for testing purpose.
     */
    case UnlimitedStorage = "--unlimited-storage";
    /**
     * For automated testing of protected content, this switch allows specific domains (e.g. example.com) to always allow the permission to share the protected media identifier. In this context, domain does not include the port number. User's content settings will not be affected by enabling this switch. Reference: https://crbug.com/41317087 Example: -...
     * Potential parameters: see description.
     */
    case UnsafelyAllowProtectedMediaIdentifierForDomain = "--unsafely-allow-protected-media-identifier-for-domain";
    /**
     * Disables warnings about self-XSS attacks when pasting into the DevTools console.
     */
    case UnsafelyDisableDevtoolsSelfXssWarnings = "--unsafely-disable-devtools-self-xss-warnings";
    /**
     * No description…
     */
    case UnsafelyTreatInsecureOriginAsSecure = "--unsafely-treat-insecure-origin-as-secure";
    /**
     * Alternate URL to use for ChromeEnterpriseRealTimeUrlLookupService real-time lookups.
     * Potential parameters: see description.
     */
    case UrlFilteringEndpoint = "--url-filtering-endpoint";
    /**
     * Initialize the GPU process using the adapter with the specified LUID. This is only used on Windows, as LUID is a Windows specific structure.
     */
    case UseAdapterLuid = "--use-adapter-luid";
    /**
     * Select which ANGLE backend to use. Options are: default: Attempts several ANGLE renderers until one successfully initializes, varying ES support by platform. d3d9: Legacy D3D9 renderer, ES2 only. d3d11: D3D11 renderer, ES2 and ES3. warp: D3D11 renderer using software rasterization, ES2 and ES3. gl: Desktop GL renderer, ES2 and ES3. gles: GLES re...
     */
    case UseAngle = "--use-angle";
    /**
     * Rather than share a common pref config file with cast_service, use a dedicated browser pref config file. This must be set when `cast_browser` is running in a different process from `cast_service`.
     */
    case UseCastBrowserPrefConfig = "--use-cast-browser-pref-config";
    /**
     * Use the Pass-through command decoder, skipping all validation and state tracking. Switch lives in ui/gl because it affects the GL binding initialization on platforms that would otherwise not default to using EGL bindings.
     * Potential parameters: see description.
     */
    case UseCmdDecoder = "--use-cmd-decoder";
    /**
     * Switch supplied to the renderer if the feature `kUseContextSnapshot` is enabled. A switch is used as at the time the renderer needs this information features have not yet been loaded.
     */
    case UseContextSnapshot = "--use-context-snapshot";
    /**
     * Use CRAS, the ChromeOS audio server.
     */
    case UseCras = "--use-cras";
    /**
     * Use ANGLE shared libraries even if ANGLE is built as a static library.
     */
    case UseDynamicAngle = "--use-dynamic-angle";
    /**
     * Replaces the existing codecs supported in peer connection with a single fake codec entry that create a fake video encoder and decoder.
     */
    case UseFakeCodecForPeerConnection = "--use-fake-codec-for-peer-connection";
    /**
     * Use the fake FakeCrasAudioClient to handle system audio controls.
     */
    case UseFakeCrasAudioClientForDbus = "--use-fake-cras-audio-client-for-dbus";
    /**
     * Use fake device for Media Stream to replace actual camera and microphone. For the list of allowed parameters, see FakeVideoCaptureDeviceFactory::ParseFakeDevicesConfigFromOptionsString().
     * Potential parameters: see description.
     */
    case UseFakeDeviceForMediaStream = "--use-fake-device-for-media-stream";
    /**
     * No description…
     */
    case UseFakeDmserver = "--use-fake-dmserver";
    /**
     * Use the fake MahiManager within the Mahi feature. Also always show the Mahi menu when context menu is shown.
     */
    case UseFakeMahiManager = "--use-fake-mahi-manager";
    /**
     * Use a fake device for accelerated decoding of MJPEG. This allows, for example, testing of the communication to the GPU service without requiring actual accelerator hardware to be present.
     * Potential parameters: see description.
     */
    case UseFakeMjpegDecodeAccelerator = "--use-fake-mjpeg-decode-accelerator";
    /**
     * Bypass the digital-identity-credential OS call. Simulate the user accepting the OS-presented dialog.
     */
    case UseFakeUiForDigitalIdentity = "--use-fake-ui-for-digital-identity";
    /**
     * Bypass the FedCM account selection dialog. If a value is provided for this switch, that account ID is selected, otherwise the first account is chosen.
     * Potential parameters: see description.
     */
    case UseFakeUiForFedcm = "--use-fake-ui-for-fedcm";
    /**
     * Bypass the media stream infobar by selecting the default device for media streams (e.g. WebRTC). Works with --use-fake-device-for-media-stream. Prefer --auto-accept-camera-and-microphone-capture which does not interact with screen/tab capture.
     */
    case UseFakeUiForMediaStream = "--use-fake-ui-for-media-stream";
    /**
     * Play a .wav file as the microphone. Note that for WebRTC calls we'll treat the bits as if they came from the microphone, which means you should disable audio processing (lest your audio file will play back distorted). The input file is converted to suit Chrome's audio buses if necessary, so most sane .wav files should work. You can pass either <...
     */
    case UseFileForFakeAudioCapture = "--use-file-for-fake-audio-capture";
    /**
     * Use an .y4m file to play as the webcam. See the comments in media/capture/video/file_video_capture_device.h for more details.
     */
    case UseFileForFakeVideoCapture = "--use-file-for-fake-video-capture";
    /**
     * Uses the 1st display in --ash-host-window-bounds as internal display. This is for debugging on linux desktop.
     */
    case UseFirstDisplayAsInternal = "--use-first-display-as-internal";
    /**
     * Select which implementation of GL the GPU process should use. Options are: desktop: whatever desktop OpenGL the user has installed (Linux and Mac default). egl: whatever EGL / GLES2 the user has installed (Windows default - actually ANGLE). swiftshader: The SwiftShader software renderer.
     */
    case UseGl = "--use-gl";
    /**
     * Use hardware gpu, if available, for tests.
     */
    case UseGpuInTests = "--use-gpu-in-tests";
    /**
     * Enables use of the fuchsia.legacymetrics.MetricsRecorder service for telemetry.
     */
    case UseLegacyMetricsService = "--use-legacy-metrics-service";
    /**
     * Use the MockCertVerifier. This only works in test code.
     */
    case UseMockCertVerifierForTesting = "--use-mock-cert-verifier-for-testing";
    /**
     * Uses mock keychain for testing purposes, which prevents blocking dialogs from causing timeouts.
     */
    case UseMockKeychain = "--use-mock-keychain";
    /**
     * Flag that stored MyFiles folder inside the user data directory. $HOME/Downloads is used as MyFiles folder for ease access to local files for debugging when running on Linux. By setting this flag, <cryptohome>/MyFiles is used even on Linux.
     */
    case UseMyfilesInUserDataDirForTesting = "--use-myfiles-in-user-data-dir-for-testing";
    /**
     * Specifies how fuchsia.scheduler.RoleManager should be used to apply scheduling profiles to threads ("unused", "ignore-missing", "error-missing", or "require"). Defaults to "error-missing", which causes WebEngine to terminate if RoleManager is unavailable and logs an error if a profile is missing.
     */
    case UseSchedulerRoles = "--use-scheduler-roles";
    /**
     * Enables the ozone x11 clipboard for linux-chromeos.
     */
    case UseSystemClipboard = "--use-system-clipboard";
    /**
     * Uses the system default printer as the initially selected destination in print preview, instead of the most recently used destination.
     */
    case UseSystemDefaultPrinter = "--use-system-default-printer";
    /**
     * Uses the operating system to resolve proxies instead of using Chromium's normal proxy resolution logic. On Windows this uses WinHttp, on macOS this uses CFNetwork, and on Linux this uses the org.freedesktop.portal.ProxyResolver XDG desktop portal.
     */
    case UseSystemProxyResolver = "--use-system-proxy-resolver";
    /**
     * Specifies whether to use Verified Access server's DEV keys.
     */
    case UseVaDevKeys = "--use-va-dev-keys";
    /**
     * Enable Vulkan support and select Vulkan implementation, must also have ENABLE_VULKAN defined. This only initializes Vulkan, the flag --enable-features=Vulkan must also be used to select Vulkan for compositing and rasterization.
     * Potential parameters: see description.
     */
    case UseVulkan = "--use-vulkan";
    /**
     * Use explicit grab when opening popup windows. See https://crbug.com/1220274
     */
    case UseWaylandExplicitGrab = "--use-wayland-explicit-grab";
    /**
     * A string used to override the default user agent with a custom one.
     * Potential parameters: see description.
     */
    case UserAgent = "--user-agent";
    /**
     * Makes Content Shell use the given path for its data directory. NOTE: "user-data-dir" is used to align with Chromedriver's behavior. Please do NOT change this to another value. NOTE: The same value is also used at Java-side in ContentShellBrowserTestActivity.java#getUserDataDirectoryCommandLineSwitch().
     * Potential parameters: see description.
     */
    case UserDataDir = "--user-data-dir";
    /**
     * Indicates that this process is the product of a relaunch following migration of User Data.
     */
    case UserDataMigrated = "--user-data-migrated";
    /**
     * Causes the process to run as a utility subprocess.
     */
    case Utility = "--utility";
    /**
     * The contents of this flag are prepended to the utility process command line. Useful values might be "valgrind" or "xterm -e gdb --args".
     * Potential parameters: see description.
     */
    case UtilityCmdPrefix = "--utility-cmd-prefix";
    /**
     * Crash the Utility process early in start-up, for testing.
     */
    case UtilityImmediateCrashForTesting = "--utility-immediate-crash-for-testing";
    /**
     * Causes the utility process to display a dialog on launch.
     */
    case UtilityStartupDialog = "--utility-startup-dialog";
    /**
     * This switch indicates the type of a utility process. It does not affect the services offered by the process, but is added to the command line to make it easier to identify the purpose of the utility process.
     * Potential parameters: see description.
     */
    case UtilitySubType = "--utility-sub-type";
    /**
     * Set options to cache V8 data. (none, code, or default)
     */
    case V8CacheOptions = "--v8-cache-options";
    /**
     * Examines a .crx for validity and prints the result.
     */
    case ValidateCrx = "--validate-crx";
    /**
     * In debug builds, asserts that the stream of input events is valid.
     */
    case ValidateInputEventStream = "--validate-input-event-stream";
    /**
     * Specifies a custom URL for the server to use as an insecure fallback when requests to |kVariationsServerURL| fail. Requests to this URL will be encrypted.
     * Potential parameters: see description.
     */
    case VariationsInsecureServerUrl = "--variations-insecure-server-url";
    /**
     * Allows overriding the country used for evaluating variations. This is similar to the "Override Variations Country" entry on chrome://translate-internals, but is exposed as a command-line flag to allow testing First Run scenarios. Additionally, unlike chrome://translate-internals, the value isn't persisted across sessions.
     * Potential parameters: see description.
     */
    case VariationsOverrideCountry = "--variations-override-country";
    /**
     * Allows overriding the administrative area code used for evaluating variations and regional eligibility features.
     */
    case VariationsOverrideGeoLevel1 = "--variations-override-geo-level-1";
    /**
     * Specifies the value of the variations seed corpus to use. When unspecified or unrecognized, the default corpus will be used.
     * Potential parameters: see description.
     */
    case VariationsSeedCorpus = "--variations-seed-corpus";
    /**
     * Override the time interval between each variation seed fetches. Unit is in minutes. The minimum is 1 minute. The default is 30 minutes.
     */
    case VariationsSeedFetchInterval = "--variations-seed-fetch-interval";
    /**
     * Used to share variations seed version with child processes.
     */
    case VariationsSeedVersion = "--variations-seed-version";
    /**
     * Specifies a custom URL for the server which reports variation data to the client. Specifying this switch enables the Variations service on unofficial builds. See variations_service.cc.
     * Potential parameters: see description.
     */
    case VariationsServerUrl = "--variations-server-url";
    /**
     * Use features defined in the value. Use this flag to reproduce experiments related issues. Copy 'Command-line Variations' value from chrome://version page. Save it to a file and pass it via this flag. The value is a base64 encoded JSON format produced by `variations::VariationsCommandLine::WriteToString`.
     * Potential parameters: see description.
     */
    case VariationsStateFile = "--variations-state-file";
    /**
     * Specifies the location of a seed file for Local State's seed to be populated from. The seed file must be in json format with the keys |kVariationsCompressedSeed| and |kVariationsSeedSignature|.
     */
    case VariationsTestSeedPath = "--variations-test-seed-path";
    /**
     * Prints version information and quits.
     */
    case Version = "--version";
    /**
     * Enables GpuMemoryBuffer-based buffer pool.
     */
    case VideoCaptureUseGpuMemoryBuffer = "--video-capture-use-gpu-memory-buffer";
    /**
     * Makes the video capture service ignore devices from the wrapped factory and expose only registered virtual devices.
     */
    case VideoCaptureUseVirtualDevicesOnly = "--video-capture-use-virtual-devices-only";
    /**
     * Texture target for CHROMIUM_image backed video frame textures.
     */
    case VideoImageTextureTarget = "--video-image-texture-target";
    /**
     * Set number of threads to use for video decoding.
     * Potential parameters: see description.
     */
    case VideoThreads = "--video-threads";
    /**
     * Captures stack traces on View construction to provide better debug info.
     */
    case ViewStackTraces = "--view-stack-traces";
    /**
     * If set the system waits the specified number of virtual milliseconds before deeming the page to be ready. For determinism virtual time does not advance while there are pending network fetches (i.e no timers will fire). Once all network fetches have completed, timers fire and if the system runs out of virtual time is fastforwarded so the next tim...
     * Potential parameters: see description.
     */
    case VirtualTimeBudget = "--virtual-time-budget";
    /**
     * No description…
     */
    case VizDemoUseGpu = "--viz-demo-use-gpu";
    /**
     * Gives the per-module maximal V-logging levels to override the value given by --v. E.g. "my_module=2,foo*=3" would change the logging level for all code in source files "my_module.*" and "foo*.*" ("-inl" suffixes are also disregarded for this matching). Any pattern containing a forward or backward slash will be tested against the whole pathname a...
     * Potential parameters: see description.
     */
    case Vmodule = "--vmodule";
    /**
     * Overrides the vsync interval used by the GPU process to refresh the display.
     */
    case VsyncInterval = "--vsync-interval";
    /**
     * Specifies the heap limit for Vulkan memory.
     */
    case VulkanHeapMemoryLimitMb = "--vulkan-heap-memory-limit-mb";
    /**
     * Specifies the sync CPU limit for total Vulkan memory.
     */
    case VulkanSyncCpuMemoryLimitMb = "--vulkan-sync-cpu-memory-limit-mb";
    /**
     * Will wait for 60 seconds for a debugger to come to attach to the process.
     */
    case WaitForDebugger = "--wait-for-debugger";
    /**
     * Will add kWaitForDebugger to every child processes. If a value is passed, it will be used as a filter to determine if the child process should have the kWaitForDebugger flag passed on or not.
     * Potential parameters: see description.
     */
    case WaitForDebuggerChildren = "--wait-for-debugger-children";
    /**
     * On every navigation a message with the renderer's URL will be logged and the renderer will wait for a debugger to be attached or SIGUSR1 to be sent to continue execution.
     * Potential parameters: see description.
     */
    case WaitForDebuggerOnNavigation = "--wait-for-debugger-on-navigation";
    /**
     * Flag used by WebUI test runners to wait for debugger to be attached.
     */
    case WaitForDebuggerWebui = "--wait-for-debugger-webui";
    /**
     * Passes the Win32 HANDLE value (as an integer) of the parent process to wait for during relaunch.
     * Potential parameters: see description.
     */
    case WaitForParentHandle = "--wait-for-parent-handle";
    /**
     * Use the sandbox Online Wallet service URL (for developer testing).
     * Potential parameters: see description.
     */
    case WalletServiceUseSandbox = "--wallet-service-use-sandbox";
    /**
     * Number of buffers to use for WaveOut.
     * Potential parameters: see description.
     */
    case WaveoutBuffers = "--waveout-buffers";
    /**
     * Specify wayland text-input protocol version. Defaults to "1" for text-input-v1. Can specify value "3" for experimental text-input-v3 support.
     * Potential parameters: see description.
     */
    case WaylandTextInputVersion = "--wayland-text-input-version";
    /**
     * Used to communicate managed policy for WebAudioBypassOutputBuffering. This feature is typically controlled by a RuntimeEnabledFeature, but requires an enterprise policy override.
     */
    case WebAudioBypassOutputBufferingOptOut = "--web-audio-bypass-output-buffering-opt-out";
    /**
     * Enables specified backend for the Web OTP API.
     */
    case WebOtpBackend = "--web-otp-backend";
    /**
     * Enables auto backend selection for Web OTP API.
     */
    case WebOtpBackendAuto = "--web-otp-backend-auto";
    /**
     * Enables Sms Verification backend for Web OTP API which requires app hash in SMS body.
     */
    case WebOtpBackendSmsVerification = "--web-otp-backend-sms-verification";
    /**
     * Enables User Consent backend for Web OTP API.
     */
    case WebOtpBackendUserConsent = "--web-otp-backend-user-consent";
    /**
     * Allows web tests to specify additional web settings for the test cases.
     */
    case WebSettingsForTesting = "--web-settings-for-testing";
    /**
     * If provided, any webui will be loaded from <flag value>/<handler_name>, where handler_name is the name passed to MaybeConfigureTestableDataSource, if the file exists. For example, if the flag is /tmp/resource_overrides, attempting to load js/app_main.js from the data source named "help_app/untrusted" will first attempt to load from /tmp/resource...
     * Potential parameters: see description.
     */
    case WebUiDataSourcePathForTesting = "--web-ui-data-source-path-for-testing";
    /**
     * Custom WebAPK server URL for the sake of testing.
     * Potential parameters: see description.
     */
    case WebapkServerUrl = "--webapk-server-url";
    /**
     * Allows trusted remote desktop clients to make WebAuthn requests on behalf of other origins. This switch only controls availability of the `remoteDesktopClientOverride` extension but doesn't by itself enable any origin to use it.
     */
    case WebauthnRemoteDesktopSupport = "--webauthn-remote-desktop-support";
    /**
     * Set the antialiasing method used for webgl. (none, explicit, implicit)
     */
    case WebglAntialiasingMode = "--webgl-antialiasing-mode";
    /**
     * Set a default sample count for webgl if msaa is enabled.
     */
    case WebglMsaaSampleCount = "--webgl-msaa-sample-count";
    /**
     * Used internally to pass the target EP device info from the browser process to the WebNN Compiler utility process, alongside `kWebNNCompilerEpLibrary`. The compiler process parses this switch during PreSandboxInit() to register the correct EP device before sandbox lockdown. The value is produced by webnn::EpDeviceInfo::ToSwitchValue().
     * Potential parameters: see description.
     */
    case WebnnCompilerEpDeviceInfo = "--webnn-compiler-ep-device-info";
    /**
     * Used internally to pass the target EP library path from the browser process to the WebNN Compiler utility process. The compiler process reads this switch during PreSandboxInit() to load the EP libraries before sandbox lockdown.
     * Potential parameters: see description.
     */
    case WebnnCompilerEpLibrary = "--webnn-compiler-ep-library";
    /**
     * Copy the generated Core ML model to the folder specified by --webnn-coreml-dump-model, note: folder needs to be accessible from the GPU sandbox or use --no-sandbox. Usage: --no-sandbox --webnn-coreml-dump-model=/tmp/CoreMLModels
     * Potential parameters: see description.
     */
    case WebnnCoremlDumpModel = "--webnn-coreml-dump-model";
    /**
     * Allow all EP devices to be selected for the Compiler process, regardless of whether `kKnownEPs` declares offline compilation support for them. For testing only.
     */
    case WebnnOrtAllowAllCompilerDevices = "--webnn-ort-allow-all-compiler-devices";
    /**
     * This switch allows us to disable the fallback to default ORT CPU EP which is enabled by default. When this switch is set: 1. ORT session creation fails if non-CPU EPs cannot fully support all graph nodes. 2. Disables OpenVINO EP internal CPU fallback if NPU model compilation fails (for debugging). Usage: --webnn-ort-disable-cpu-fallback
     */
    case WebnnOrtDisableCpuFallback = "--webnn-ort-disable-cpu-fallback";
    /**
     * Disable ORT virtual devices in the Compiler process, requiring actual hardware devices for compilation instead. This switch is for testing only. Note that online compilation requires access to actual hardware which is blocked by the compiler sandbox, so this switch is usually used together with `--disable-webnn-compiler-sandbox`.
     */
    case WebnnOrtDisableVirtualDevices = "--webnn-ort-disable-virtual-devices";
    /**
     * Set the folder specified by --webnn-ort-dump-model for ONNX Runtime to save optimized models after graph level transformations. By default, ORT saves the optimized ONNX model. Some EPs (e.g., OpenVINO) dump their own IR models via a session config entry specified by `EpInfo::model_dump_config_key` instead. Usage: --no-sandbox --webnn-ort-dump-mo...
     */
    case WebnnOrtDumpModel = "--webnn-ort-dump-model";
    /**
     * This switch allows us to collect ORT profile data for performance analysis. The profile data file is generated in Chrome's folder with a fixed naming format "prefix_date_time.json". The prefix can be provided by user or use "WebNNOrtProfile" as default. Usage: --no-sandbox --webnn-ort-enable-profiling="WebNNOrtOvCpuProfile"
     * Potential parameters: see description.
     */
    case WebnnOrtEnableProfiling = "--webnn-ort-enable-profiling";
    /**
     * Force ONNX Runtime to only select one specific execution provider (EP) device which matches the given EP name, hardware vendor id and hardware device id for WebNN during the ORT session creation stage. Notes: 1. Available EP devices can be queried in logs when the `webnn-ort-logging-level` is set to `VERBOSE` or `INFO`. If no matching device is ...
     */
    case WebnnOrtEpDevice = "--webnn-ort-ep-device";
    /**
     * Specify the ORT EP name and library path pair via this switch for testing development EP builds. Libraries of the ORT EP specified by the EP name are forced to be loaded from the specified path. This switch is not to be used in shipping scenarios and is ignored by default. The value should be in the format <ep_name>?<ep_library_path>. Usage: --w...
     * Potential parameters: see description.
     */
    case WebnnOrtEpLibraryPathForTesting = "--webnn-ort-ep-library-path-for-testing";
    /**
     * Configure the graph optimization level of ONNX Runtime. Usage: --webnn-ort-graph-optimization-level=DISABLE_ALL Other levels could be "BASIC", "EXTENDED" and "ALL".
     * Potential parameters: see description.
     */
    case WebnnOrtGraphOptimizationLevel = "--webnn-ort-graph-optimization-level";
    /**
     * Enable all execution providers, ignoring the enabled flag blocklist.
     * Potential parameters: see description.
     */
    case WebnnOrtIgnoreEpBlocklist = "--webnn-ort-ignore-ep-blocklist";
    /**
     * Ignore all IHV execution providers, only the default CPUExecutionProvider and DmlExecutionProvider will be used.
     */
    case WebnnOrtIgnoreIhvEps = "--webnn-ort-ignore-ihv-eps";
    /**
     * Force onnxruntime.dll to be loaded from a location specified by the switch for testing development ORT build. This switch is not to be used in shipping scenarios and is ignored by default. Usage: --webnn-ort-library-path-for-testing="C:\Program Files\ONNXRuntime" --allow-third-party-modules
     * Potential parameters: see description.
     */
    case WebnnOrtLibraryPathForTesting = "--webnn-ort-library-path-for-testing";
    /**
     * Configure the logging severity level of ONNX Runtime. Usage: --webnn-ort-logging-level=VERBOSE Other severity levels could be "INFO", "WARNING", "ERROR" (default), and "FATAL".
     * Potential parameters: see description.
     */
    case WebnnOrtLoggingLevel = "--webnn-ort-logging-level";
    /**
     * Add arbitrary ONNX Runtime session configuration entries for testing. The value must use the format <key>,<value>[,<key>,<value>...]. Like other testing switches, this is available in release builds and must only be supplied through a trusted startup command line. Existing session configuration entries, including dispatch security settings, cann...
     * Potential parameters: see description.
     */
    case WebnnOrtSessionConfigEntriesForTesting = "--webnn-ort-session-config-entries-for-testing";
    /**
     * Save the generated TFLite model file to the folder specified by --webnn-tflite-dump-model. Note, the folder needs to be accessible from the GPU process sandbox or --no-sandbox must be used. Usage: --no-sandbox --webnn-tflite-dump-model=/tmp/tflite_models
     * Potential parameters: see description.
     */
    case WebnnTfliteDumpModel = "--webnn-tflite-dump-model";
    /**
     * Sets the delay (in seconds) between proactive prunings of remote-bound WebRTC event logs which are pending upload. All positive values are legal. All negative values are illegal, and ignored. If set to 0, the meaning is "no proactive pruning".
     * Potential parameters: see description.
     */
    case WebrtcEventLogProactivePruningDelta = "--webrtc-event-log-proactive-pruning-delta";
    /**
     * WebRTC event logs will only be uploaded if the conditions hold for this many milliseconds.
     */
    case WebrtcEventLogUploadDelayMs = "--webrtc-event-log-upload-delay-ms";
    /**
     * Normally, remote-bound WebRTC event logs are uploaded only when no peer connections are active. With this flag, the upload is never suppressed.
     */
    case WebrtcEventLogUploadNoSuppression = "--webrtc-event-log-upload-no-suppression";
    /**
     * Enable capture and local storage of WebRTC event logs without visiting chrome://webrtc-internals. This is useful for automated testing. It accepts the path to which the local logs would be stored. Disabling is not possible without restarting the browser and relaunching without this flag.
     * Potential parameters: see description.
     */
    case WebrtcEventLogging = "--webrtc-event-logging";
    /**
     * Override WebRTC IP handling policy to mimic the behavior when WebRTC IP handling policy is specified in Preferences.
     */
    case WebrtcIpHandlingPolicy = "--webrtc-ip-handling-policy";
    /**
     * used to disable safebrowsing functionality in webview
     */
    case WebviewDisableSafebrowsingSupport = "--webview-disable-safebrowsing-support";
    /**
     * Indicate that the this is being used by Android WebView and its draw functor is using vulkan.
     */
    case WebviewDrawFunctorUsesVulkan = "--webview-draw-functor-uses-vulkan";
    /**
     * Enables modern SameSite cookie behavior (as opposed to legacy behavior). This is used for WebView versions prior to when the modern behavior will be enabled by default. This enables the same-site-by-default-cookies, cookies-without-SameSite-must-be-secure, and schemeful-same-site features.
     */
    case WebviewEnableModernCookieSameSite = "--webview-enable-modern-cookie-same-site";
    /**
     * Enables FencedFrames. This also enables PrivacySandboxAdsAPIsOverride.
     */
    case WebviewFencedFrames = "--webview-fenced-frames";
    /**
     * Enables crashes during WebView startup in the Java layer
     */
    case WebviewForceCrashJava = "--webview-force-crash-java";
    /**
     * Enables crashes during WebView startup in the Native layer
     */
    case WebviewForceCrashNative = "--webview-force-crash-native";
    /**
     * Force disables 3rd party cookie for all apps.
     */
    case WebviewForceDisable3pcs = "--webview-force-disable-3pcs";
    /**
     * Opts in WebView to GMSCore's bindService optimizations
     */
    case WebviewOptInToGmsBindServiceOptimization = "--webview-opt-in-to-gms-bind-service-optimization";
    /**
     * Certain ProfileStore methods do not trigger startup.
     */
    case WebviewProfileStoreNotTriggerStartup = "--webview-profile-store-not-trigger-startup";
    /**
     * Enables different reductions of the user-agent.
     */
    case WebviewReduceUserAgentMinorVersion = "--webview-reduce-user-agent-minor-version";
    /**
     * Forces startup tasks to run synchronously on the UI thread even when triggered from a background thread.
     */
    case WebviewRunStartupTasksSync = "--webview-run-startup-tasks-sync";
    /**
     * Enables SafeBrowsing and causes WebView to treat all resources as malicious. Use care: this will block all resources from loading.
     */
    case WebviewSafebrowsingBlockAllResources = "--webview-safebrowsing-block-all-resources";
    /**
     * Certain static methods in SharedStatics do not trigger startup.
     */
    case WebviewStaticMethodsNotTriggerStartup = "--webview-static-methods-not-trigger-startup";
    /**
     * Use WebView's context for resource lookups instead of the embedding app's.
     */
    case WebviewUseSeparateResourceContext = "--webview-use-separate-resource-context";
    /**
     * WebView will log additional debugging information to logcat, such as variations and commandline state.
     * Potential parameters: see description.
     */
    case WebviewVerboseLogging = "--webview-verbose-logging";
    /**
     * Force What's New on Desktop to request from the staging environment.
     */
    case WhatsNewUseStaging = "--whats-new-use-staging";
    /**
     * Specifies which category option was clicked in the Windows Jumplist that resulted in a browser startup.
     * Potential parameters: see description.
     */
    case WinJumplistAction = "--win-jumplist-action";
    /**
     * Specify the initial window user title: --window-name="My custom title"
     * Potential parameters: see description.
     */
    case WindowName = "--window-name";
    /**
     * Specify the initial window position: --window-position=x,y
     * Potential parameters: see description.
     */
    case WindowPosition = "--window-position";
    /**
     * Sets the initial window size. Provided as string in the format "800,600". This also defines the headless screen size in lieu of --screen-info.
     * Potential parameters: see description.
     */
    case WindowSize = "--window-size";
    /**
     * Specify the initial window workspace: --window-workspace=id
     * Potential parameters: see description.
     */
    case WindowWorkspace = "--window-workspace";
    /**
     * Uses WinHTTP to fetch and evaluate PAC scripts. Otherwise the default is to use Chromium's network stack to fetch, and V8 to evaluate.
     */
    case WinhttpProxyResolver = "--winhttp-proxy-resolver";
    /**
     * No description…
     */
    case WipeRecordings = "--wipe-recordings";
    /**
     * Do not suppress stack traces in death tests.
     */
    case WithDeathTestStackTraces = "--with-death-test-stack-traces";
    /**
     * Please keep alphabetized.
     */
    case WmWindowAnimationsDisabled = "--wm-window-animations-disabled";
    /**
     * No description…
     */
    case WpMaxFileOpeningThreads = "--wp-max-file-opening-threads";
    /**
     * Write a compiled test json file to a location where writable.
     */
    case WriteCompiledTestsJsonToWritablePath = "--write-compiled-tests-json-to-writable-path";
    /**
     * A switch that controls XSLT availability via enterprise policy.
     */
    case XsltEnabledPolicy = "--xslt-enabled-policy";
    /**
     * Causes the process to run as a zygote.
     */
    case Zygote = "--zygote";
    /**
     * The prefix used when starting the zygote process. (i.e. 'gdb --args')
     */
    case ZygoteCmdPrefix = "--zygote-cmd-prefix";
}