<?php
/**
 * @var bool $force_callouts Whether to force the callouts.
 */

$callout = 'friends_2022_30';

$donor_count    = 4816;
$donor_goal     = 6500;
$progress_width = ( $donor_count / $donor_goal ) * 100;

$feature_callout_link = 'https://docs.pods.io/fields/simple-repeatable-fields/';
$pods_pro_link        = 'https://pods.io/2020/12/31/introducing-pods-pro-by-skcdev/';
$learn_more_link      = 'https://friends.pods.io/';
$donate_now_link      = 'https://friends.pods.io/donations/become-a-friend/';

$campaign_args = [
	'utm_source'   => 'pods_plugin_callout',
	'utm_medium'   => 'link',
	'utm_campaign' => $callout,
];

$feature_callout_link = add_query_arg( $campaign_args, $feature_callout_link );
$pods_pro_link        = add_query_arg( $campaign_args, $pods_pro_link );
$learn_more_link      = add_query_arg( $campaign_args, $learn_more_link );
$donate_now_link      = add_query_arg( $campaign_args, $donate_now_link );
?>

<div class="pods-admin_friends-callout_container">
	<?php if ( ! $force_callouts ) : ?>
		<a href="<?php echo esc_url( add_query_arg( 'pods_callout_dismiss', $callout ) ); ?>" class="pods-admin_friends-callout_close">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><polygon points="95,17 83,5 50,38 17,5 5,17 38,50 5,83 17,95 50,62 83,95 95,83 62,50 "/></svg>
		</a>
	<?php endif; ?>
	<div class="pods-admin_friends-callout_logo-container">
		<svg version="1.1" viewBox="0 0 305 111" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Friends of Pods Logo</title> <defs> <path id="a" d="m0.14762 49.116c0 27.103 21.919 49.075 48.956 49.075 19.888 0 37.007-11.888 44.669-28.962-2.1342-6.538-3.9812-18.041 3.3854-29.538-0.3152-1.624-0.71019-3.219-1.1807-4.781-22.589 22.49-40.827 24.596-54.558 24.229-0.12701-4e-3 -0.58883-0.079-0.71152-0.35667 0 0-0.20016-0.89933 0.38502-0.89933 26.307 0 41.29-15.518 53.531-26.865-0.66763-1.687-1.4264-3.3273-2.2695-4.9167-13.196-3.6393-18.267-14.475-20.067-20.221-6.9007-3.7267-14.796-5.8413-23.184-5.8413-27.037 0-48.956 21.972-48.956 49.076zm62.283-34.287s18.69-2.039 24.194 21.114c-20.424-1.412-24.194-21.114-24.194-21.114zm-7.4779 9.7423s16.57-0.55467 20.342 20.219c-17.938-2.602-20.342-20.219-20.342-20.219zm-9.1018 8.256s14.912-0.97567 18.728 17.626c-16.209-1.8273-18.728-17.626-18.728-17.626zm40.774 3.116c0.021279 0.0013333 0.040563 0.0026667 0.061842 0.0043333l-0.044886 0.067667c-0.0056523-0.024-0.011304-0.048-0.016957-0.072zm-48.709 3.445s13.103-0.859 16.456 15.486c-14.243-1.6047-16.456-15.486-16.456-15.486zm-10.498 1.6027s12.587-0.82333 15.808 14.877c-13.68-1.5417-15.808-14.877-15.808-14.877zm-10.391 0.72233s11.423-0.74667 14.347 13.502c-12.417-1.3997-14.347-13.502-14.347-13.502zm-11.298 2.0857s9.5832-2.526 13.712 9.0523c-0.44919 0.036667-0.88474 0.054333-1.3073 0.054333-9.6148-3.333e-4 -12.405-9.1067-12.405-9.1067zm81.565 0.964c-0.0073147-0.021333-0.014962-0.043667-0.021612-0.064667l0.066497 0.018333c-0.014962 0.015333-0.029924 0.030667-0.044886 0.046333 7.1338 21.557-5.5721 33.29-5.5721 33.29s-8.9279-18.395 5.5721-33.29zm-11.999 0.027333c0.017622 0.0023333 0.035576 5e-3 0.053198 0.0076667l-0.041561 0.056c-0.0036573-0.021667-0.0073147-0.042-0.011637-0.063667zm-10.716 5.6627c0.015959 2e-3 0.032916 0.0036666 0.048543 0.0056666l-0.036573 0.051c-0.0039899-0.019667-0.0076472-0.037333-0.01197-0.056667zm12.212 1.8693c-0.0023274-0.021-0.0046548-0.043333-0.0066497-0.064667l0.056523 0.035667c-0.016624 0.01-0.032916 0.019333-0.049873 0.029 2.2323 21.678-11.682 28.793-11.682 28.793s-4.4962-19.303 11.682-28.793zm-57.318 0.52633-0.018619 0.037333c-0.0039899-0.011667-0.0086447-0.023667-0.012302-0.034667 0.010307-1e-3 0.020614-0.0016667 0.030921-0.0026667zm34.9 2.0257c0.013964 0.0013333 0.027264 3e-3 0.041561 0.0043333l-0.031254 0.046333c-0.0036573-0.017-0.0069822-0.034-0.010307-0.050667zm-22.998 0.34067c0.012302 0.0016666 0.025269 3e-3 0.037571 0.0043333l-0.028594 0.039c-0.0029924-0.014667-0.0056523-0.028667-0.0089771-0.043333zm-16.9 3.542s8.0594-7.693 18.254 0.88467c-3.1137 2.6673-6.0605 3.5853-8.642 3.5853-5.6965 0-9.6125-4.47-9.6125-4.47zm28.752-2.8893c0.013632 0.0013334 0.027264 3e-3 0.040896 0.0043334l-0.030589 0.045c-0.0033249-0.016-0.0069822-0.033333-0.010307-0.049333zm21.183 2.4917c3.325e-4 -0.019 3.325e-4 -0.039333 6.65e-4 -0.058333l0.046548 0.039667c-0.015959 0.0063334-0.031254 0.012333-0.047213 0.018667-0.19118 19.436-13.172 23.733-13.172 23.733s-2.0415-17.662 13.172-23.733zm-31.651 1.257v0.05c-0.0099746-0.0083333-0.019617-0.016333-0.029259-0.024667 0.0093096-0.0086666 0.019284-0.017 0.029259-0.025333zm-6.6234 10.543s4.296-11.202 16.634-9.0197c-3.5273 8.062-9.0759 9.5947-12.782 9.5947-2.2719 0-3.8515-0.575-3.8515-0.575zm16.651-9.0593 0.018287 0.046c-0.01197-2e-3 -0.023606-0.0043334-0.035576-0.0063334 0.0059848-0.013333 0.011637-0.026333 0.017289-0.039667zm10.12 0.685c0.0029923-0.016333 0.0059847-0.033333 0.0089771-0.049667l0.034911 0.043c-0.014629 0.0023333-0.029259 0.0046667-0.043888 0.0066667-2.9518 16.71-14.755 17.762-14.755 17.762s0.77369-15.639 14.755-17.762z"/> </defs> <g fill="none" fill-rule="evenodd"> <g transform="translate(6.3172 6.3333)"> <mask id="b" fill="white"> <use xlink:href="#a"/> </mask> <polygon points="-3.1772 -3.2937 100.48 -3.2937 100.48 101.52 -3.1772 101.52" fill="#fff" mask="url(#b)"/> </g> <path d="m55.303 3.569c-28.538 0-51.754 23.273-51.754 51.88 0 28.607 23.216 51.88 51.754 51.88 28.538 0 51.754-23.273 51.754-51.88 0-28.607-23.217-51.88-51.754-51.88m0 107.18c-30.417 0-55.163-24.807-55.163-55.298 0-30.492 24.746-55.298 55.163-55.298 30.417 0 55.164 24.807 55.164 55.298 0 30.491-24.747 55.298-55.164 55.298" fill="#fff"/> <path d="m137.42 77.263-2.7699 22.725h-14.958l8.2174-67.434h22.252c4.001 0 7.4249 0.48597 10.272 1.4579 2.8469 0.97195 5.1859 2.3141 7.0171 4.0266 1.8312 1.7125 3.1777 3.7335 4.0395 6.0631 0.86176 2.3296 1.2926 4.8366 1.2926 7.521 0 3.6718-0.56167 7.0736-1.685 10.205-1.1234 3.1318-2.8392 5.8394-5.1474 8.1227s-5.232 4.0729-8.7714 5.3688-7.725 1.9439-12.557 1.9439h-7.2018zm4.1549-33.463-2.7238 22.123h7.248c2.1544 0 3.9625-0.31626 5.4244-0.9488 1.4619-0.63254 2.6468-1.5273 3.5547-2.6844 0.90792-1.1571 1.5619-2.5378 1.962-4.1423 0.4001-1.6045 0.60015-3.3632 0.60015-5.2763 0-1.3268-0.17696-2.5456-0.5309-3.6564-0.35394-1.1108-0.90022-2.0673-1.6389-2.8695-0.73865-0.80224-1.6696-1.4271-2.793-1.8745-1.1234-0.4474-2.4544-0.6711-3.9933-0.6711h-7.1095zm48.956 46.283c1.6004 0 3.0315-0.48597 4.2934-1.4579 1.2619-0.97195 2.3313-2.2987 3.2085-3.9803 0.87714-1.6816 1.5542-3.6409 2.0313-5.8779 0.47704-2.237 0.71556-4.6206 0.71556-7.1507 0-3.4867-0.46934-5.9782-1.408-7.4747-0.9387-1.4965-2.4698-2.2447-4.5934-2.2447-1.6004 0-3.0315 0.48597-4.2934 1.4579-1.2619 0.97195-2.3313 2.291-3.2085 3.9572s-1.5542 3.6255-2.0313 5.8779c-0.47704 2.2525-0.71556 4.6437-0.71556 7.1739 0 3.425 0.46934 5.9011 1.408 7.4284 0.9387 1.5273 2.4698 2.291 4.5934 2.291zm-1.2926 10.645c-2.6776 0-5.1782-0.4474-7.5019-1.3422-2.3237-0.89481-4.3395-2.1984-6.0477-3.9109-1.7081-1.7125-3.0469-3.8261-4.0164-6.3408-0.96948-2.5147-1.4542-5.4074-1.4542-8.6781 0-4.2581 0.70017-8.1689 2.1005-11.733 1.4004-3.5638 3.2854-6.6416 5.6552-9.2335s5.1166-4.6129 8.2405-6.0631 6.4093-2.1753 9.8563-2.1753c2.6776 0 5.1705 0.4474 7.4788 1.3422 2.3083 0.89481 4.3164 2.1984 6.0246 3.9109 1.7081 1.7125 3.0546 3.8261 4.0395 6.3408 0.98486 2.5147 1.4773 5.4074 1.4773 8.6781 0 4.1963-0.70017 8.0764-2.1005 11.64-1.4004 3.5638-3.2854 6.6493-5.6552 9.2566-2.3698 2.6073-5.1166 4.6437-8.2405 6.1094-3.1239 1.4656-6.4093 2.1984-9.8563 2.1984zm62.6-0.74053c-0.89253 0-1.6389-0.11571-2.239-0.34712-0.60015-0.23142-1.0772-0.54768-1.4311-0.9488s-0.60015-0.87937-0.73864-1.4348c-0.1385-0.5554-0.20774-1.1571-0.20774-1.805v-4.0266c-2.1852 2.9004-4.6011 5.176-7.248 6.8267-2.6468 1.6508-5.4629 2.4761-8.4482 2.4761-1.9697 0-3.7702-0.34712-5.4013-1.0414-1.6312-0.69425-3.0392-1.7819-4.2241-3.263s-2.1082-3.3709-2.7699-5.6697c-0.66171-2.2987-0.99255-5.0525-0.99255-8.2615 0-2.777 0.29238-5.4845 0.87714-8.1227 0.58476-2.6381 1.4003-5.1143 2.4468-7.4284s2.2929-4.4354 3.7394-6.3639c1.4465-1.9285 3.0392-3.5792 4.7781-4.9523 1.7389-1.3731 3.5778-2.4453 5.5168-3.2167s3.9394-1.1571 6.0015-1.1571c1.9697 0 3.7471 0.33169 5.3321 0.99508 1.585 0.66339 2.9777 1.535 4.178 2.615l3.0469-24.16h14.034l-8.5867 69.286h-7.6634zm-14.588-10.182c0.98486 0 2.0082-0.37026 3.07-1.1108s2.0928-1.7587 3.0931-3.0547 1.9312-2.8155 2.793-4.5589c0.86176-1.7433 1.6004-3.6178 2.2159-5.6234l1.4773-11.663c-0.89253-0.70968-1.8851-1.2188-2.9777-1.5273s-2.1313-0.46283-3.1162-0.46283c-1.662 0-3.1931 0.55539-4.5934 1.6662s-2.6083 2.5687-3.624 4.3737c-1.0156 1.805-1.8081 3.8646-2.3775 6.1788s-0.85406 4.6746-0.85406 7.0813c0 3.0547 0.44626 5.2685 1.3388 6.6416 0.89253 1.3731 2.0774 2.0596 3.5547 2.0596zm63.465-27.724c-0.43088 0.5554-0.83097 0.95651-1.2003 1.2034s-0.86175 0.37026-1.4773 0.37026-1.2234-0.13885-1.8235-0.41655-1.2465-0.59396-1.9389-0.9488c-0.69248-0.35484-1.4773-0.6711-2.3544-0.9488-0.87714-0.2777-1.8851-0.41655-3.0238-0.41655-2.1236 0-3.6394 0.40883-4.5473 1.2265-0.90792 0.81767-1.3619 1.8745-1.3619 3.1704 0 0.8331 0.25391 1.5428 0.76173 2.129 0.50782 0.58625 1.1772 1.1108 2.0082 1.5736 0.83098 0.46283 1.7774 0.88709 2.8392 1.2728 1.0618 0.38569 2.1467 0.81766 3.2547 1.2959 1.108 0.47826 2.1928 1.0259 3.2547 1.643s2.0082 1.3731 2.8392 2.2679c0.83098 0.89481 1.5004 1.9593 2.0082 3.1935 0.50782 1.2342 0.76173 2.6998 0.76173 4.3969 0 2.4067-0.47704 4.6823-1.4311 6.8267-0.95409 2.1445-2.3236 4.0112-4.1087 5.6002-1.7851 1.5891-3.9471 2.8541-6.4862 3.7952-2.5391 0.94109-5.3936 1.4116-8.5637 1.4116-1.5081 0-3.0007-0.15428-4.478-0.46283-1.4773-0.30856-2.8699-0.7251-4.178-1.2496s-2.5006-1.1494-3.5778-1.8745c-1.0772-0.7251-1.9543-1.5042-2.6314-2.3373l3.5086-5.2763c0.43088-0.61711 0.931-1.1031 1.5004-1.4579 0.56938-0.35484 1.2695-0.53225 2.1005-0.53225 0.76942 0 1.4311 0.18513 1.9851 0.5554 0.55399 0.37027 1.1541 0.77138 1.8004 1.2034s1.4157 0.83309 2.3083 1.2034c0.89253 0.37027 2.062 0.5554 3.5086 0.5554 2.0313 0 3.5393-0.45511 4.5242-1.3653 0.98486-0.91024 1.4773-1.9824 1.4773-3.2167 0-0.95652-0.25391-1.7433-0.76173-2.3604-0.50782-0.61711-1.1772-1.1494-2.0082-1.5968-0.83098-0.4474-1.7697-0.84852-2.8161-1.2034-1.0464-0.35484-2.1236-0.74824-3.2316-1.1802s-2.1852-0.93337-3.2316-1.5042c-1.0464-0.57083-1.9851-1.2882-2.8161-2.1522-0.83098-0.86395-1.5004-1.9285-2.0082-3.1935-0.50782-1.2651-0.76173-2.7924-0.76173-4.582 0-2.2216 0.40779-4.3814 1.2234-6.4796s2.0313-3.9572 3.6471-5.5771c1.6158-1.6199 3.624-2.9235 6.0246-3.9109s5.2013-1.4811 8.4021-1.4811c3.2008 0 6.0553 0.55539 8.5637 1.6662 2.5083 1.1108 4.578 2.4684 6.2092 4.0729l-3.6932 5.0911z" fill="#fff"/> <g transform="translate(128.86 3.5426)" fill="#fff"> <path d="m14.411 3.7958h-8.3873l-0.77821 6.399h7.0759l-0.3891 3.0104h-7.0471l-1.052 8.6095h-3.7613l2.5652-21.029h12.149l-0.37469 3.0104zm-0.59086 18.019 1.8014-14.936h1.8014c0.34587 0 0.62929 0.077562 0.85026 0.23269 0.22097 0.15513 0.33146 0.40236 0.33146 0.7417v0.050901c0 0.033934-0.0048037 0.13331-0.014411 0.29813s-0.019215 0.42417-0.028822 0.77806c-0.0096075 0.35388-0.028822 0.85077-0.057645 1.4907 0.60527-1.1732 1.2682-2.0797 1.9887-2.7196 0.72056-0.6399 1.4699-0.95985 2.2482-0.95985 0.39391 0 0.79262 0.087258 1.1961 0.26178l-0.6485 3.4322c-0.48038-0.2036-0.93673-0.30541-1.3691-0.30541-0.85507 0-1.6044 0.41205-2.2482 1.2362-0.6437 0.82411-1.1721 2.1136-1.5852 3.8685l-0.77821 6.5299h-3.4875zm16.083-14.921-1.7726 14.921h-3.5163l1.7726-14.921h3.5163zm0.8935-4.3484c0 0.31025-0.06485 0.60111-0.19455 0.87259-0.1297 0.27147-0.29783 0.50901-0.50439 0.71261-0.20656 0.2036-0.44434 0.366-0.71336 0.48719-0.26901 0.12119-0.54762 0.18179-0.83585 0.18179-0.27862 0-0.55003-0.060596-0.81423-0.18179-0.26421-0.12119-0.49719-0.28359-0.69894-0.48719s-0.36268-0.44114-0.48278-0.71261c-0.12009-0.27147-0.18014-0.56233-0.18014-0.87259s0.062448-0.60596 0.18735-0.88713 0.28822-0.52597 0.48998-0.73443c0.20176-0.20845 0.43474-0.37327 0.69894-0.49447 0.26421-0.12119 0.53562-0.18179 0.81423-0.18179 0.28823 0 0.56684 0.060596 0.83585 0.18179 0.26901 0.12119 0.50679 0.28359 0.71336 0.48719 0.20656 0.2036 0.37229 0.44599 0.49719 0.72716s0.18735 0.58172 0.18735 0.90167zm13.402 7.8097c0 0.66899-0.1321 1.2798-0.39631 1.8324-0.26421 0.55264-0.73737 1.0471-1.4195 1.4834-0.68213 0.4363-1.6068 0.81199-2.7742 1.1271-1.1673 0.3151-2.6541 0.56476-4.4603 0.74897v0.18906c0 2.3463 0.98476 3.5194 2.9543 3.5194 0.42273 0 0.79742-0.041205 1.1241-0.12362s0.61248-0.18179 0.85747-0.29813 0.46596-0.24723 0.66292-0.39266c0.19695-0.14543 0.37949-0.27632 0.54763-0.39266 0.16813-0.11635 0.33386-0.21572 0.49719-0.29813 0.16333-0.082411 0.34106-0.12362 0.53322-0.12362 0.11529 0 0.23058 0.026662 0.34587 0.079987 0.11529 0.053325 0.21136 0.13331 0.28822 0.23996l0.90791 1.1053c-0.5092 0.51386-1.0088 0.95984-1.4988 1.338-0.48998 0.37812-0.98957 0.68837-1.4988 0.93076-0.5092 0.24239-1.0472 0.42175-1.6141 0.5381-0.56684 0.11635-1.1865 0.17452-1.859 0.17452-0.86468 0-1.6477-0.14785-2.349-0.44356-0.70135-0.29571-1.3018-0.71261-1.8014-1.2507-0.49959-0.5381-0.88629-1.1877-1.1601-1.9488-0.27381-0.76109-0.41072-1.6119-0.41072-2.5523 0-0.78533 0.084065-1.5561 0.2522-2.3124 0.16813-0.75625 0.41072-1.4737 0.72777-2.1524 0.31705-0.67868 0.70615-1.304 1.1673-1.8761 0.46116-0.57203 0.98236-1.0665 1.5636-1.4834 0.58126-0.4169 1.2201-0.7417 1.9167-0.97439 0.69655-0.23269 1.4435-0.34903 2.2409-0.34903 0.77821 0 1.4579 0.1115 2.0392 0.33449 0.58126 0.223 1.0664 0.51143 1.4555 0.86532 0.3891 0.35388 0.67973 0.74897 0.87188 1.1853 0.19215 0.4363 0.28822 0.86289 0.28822 1.2798zm-4.8566-1.1634c-0.48038 0-0.92712 0.099377-1.3402 0.29813-0.41312 0.19876-0.78541 0.4775-1.1169 0.83623-0.33146 0.35873-0.61968 0.78775-0.86467 1.2871-0.24499 0.49932-0.43954 1.0447-0.58365 1.6361 1.1913-0.16482 2.1497-0.34419 2.875-0.5381 0.72537-0.19391 1.2874-0.40721 1.6861-0.6399 0.39871-0.23269 0.66292-0.47992 0.79262-0.7417 0.1297-0.26178 0.19455-0.54294 0.19455-0.8435 0-0.14543-0.031224-0.29571-0.093673-0.45084-0.062449-0.15513-0.15852-0.29329-0.28822-0.41448-0.1297-0.12119-0.29783-0.22299-0.50439-0.30541-0.20656-0.082411-0.45876-0.12362-0.75659-0.12362zm6.0095 12.623 1.7726-14.936h1.8158c0.37469 0 0.66532 0.092105 0.87188 0.27632 0.20656 0.18421 0.30984 0.47992 0.30984 0.88713l-0.10088 1.9342c0.74939-1.115 1.5804-1.9464 2.4931-2.4941 0.91272-0.54779 1.8542-0.82169 2.8246-0.82169 0.54763 0 1.0448 0.099377 1.4916 0.29813s0.82864 0.48962 1.1457 0.87259 0.56204 0.85319 0.73497 1.4107c0.17294 0.55749 0.2594 1.1998 0.2594 1.927 0 0.18421-0.0072055 0.37085-0.021617 0.55991s-0.031224 0.38539-0.050439 0.589l-1.1097 9.4967h-3.5596c0.19215-1.6385 0.35548-3.0274 0.48998-4.1666 0.13451-1.1392 0.24499-2.0869 0.33146-2.8432 0.086468-0.75625 0.15372-1.3501 0.20176-1.7815 0.048038-0.43145 0.084065-0.75866 0.10808-0.98166 0.024019-0.223 0.03843-0.37085 0.043234-0.44356s0.0072056-0.13331 0.0072056-0.18179c0-0.6399-0.11529-1.1029-0.34587-1.3889s-0.59086-0.42902-1.0808-0.42902c-0.39391 0-0.80222 0.11634-1.225 0.34903-0.42273 0.23269-0.82624 0.56233-1.2105 0.98893-0.3843 0.4266-0.73497 0.94045-1.052 1.5416-0.31705 0.60112-0.57645 1.2701-0.77821 2.0069l-0.80703 7.3297h-3.5596zm25.738 0c-0.43234 0-0.73497-0.1018-0.90791-0.30541-0.17294-0.2036-0.2594-0.46053-0.2594-0.77078l0.11529-2.1815c-0.71096 1.0665-1.5084 1.9124-2.3923 2.5378-0.88389 0.62536-1.8254 0.93803-2.8246 0.93803-0.61488 0-1.1745-0.11392-1.6789-0.34176-0.5044-0.22784-0.93433-0.5696-1.2898-1.0253s-0.62929-1.0326-0.82144-1.7306c-0.19215-0.69807-0.28822-1.5222-0.28822-2.4723 0-0.8435 0.086466-1.67 0.2594-2.4796 0.17294-0.80957 0.41792-1.5779 0.73497-2.3051 0.31705-0.72716 0.69414-1.3961 1.1313-2.0069 0.43714-0.61081 0.92472-1.1392 1.4627-1.5852 0.53802-0.44599 1.1121-0.79502 1.7221-1.0471s1.2418-0.37812 1.8951-0.37812c0.66292 0 1.2634 0.12119 1.8014 0.36358 0.53802 0.24239 1.0088 0.57203 1.4123 0.98893l0.96555-7.8097h3.4875l-2.6373 21.611h-1.8879zm-4.8854-2.6032c-0.60527 0-1.076-0.2545-1.4123-0.76351-0.33626-0.50901-0.50439-1.2871-0.50439-2.3342 0-0.80472 0.10088-1.607 0.30264-2.4069 0.20176-0.79988 0.48758-1.5198 0.85747-2.1597 0.36989-0.6399 0.81423-1.1586 1.333-1.5561 0.51881-0.39751 1.0952-0.59627 1.7293-0.59627 0.40352 0 0.81663 0.072715 1.2394 0.21815s0.79742 0.39751 1.1241 0.75624l-0.44675 3.6212c-0.23058 0.73685-0.50679 1.4228-0.82865 2.0579-0.32185 0.63505-0.67012 1.1877-1.0448 1.6579-0.37469 0.47023-0.76379 0.83865-1.1673 1.1053s-0.79742 0.39994-1.1817 0.39994zm19.549-9.5612c-0.10501 0.15274-0.20525 0.26014-0.30071 0.32219-0.095464 0.062051-0.21956 0.093077-0.37231 0.093077-0.16229 0-0.32935-0.047731-0.50118-0.14319-0.17183-0.095464-0.36992-0.20286-0.59426-0.32219-0.22434-0.11933-0.48209-0.22672-0.77325-0.32219s-0.64199-0.14319-1.0525-0.14319c-0.75416 0-1.3317 0.16945-1.7327 0.50834-0.40095 0.3389-0.60142 0.76132-0.60142 1.2673 0 0.29594 0.083529 0.54653 0.25059 0.75177s0.38424 0.38424 0.65154 0.53698c0.2673 0.15274 0.57278 0.29355 0.91645 0.42242s0.69688 0.2673 1.0596 0.41526 0.71597 0.31503 1.0596 0.50118c0.34367 0.18615 0.64915 0.41288 0.91645 0.68017 0.2673 0.2673 0.48447 0.58948 0.65154 0.96656s0.25059 0.82814 0.25059 1.3532c0 0.70643-0.14081 1.3794-0.42242 2.019-0.28162 0.63961-0.68495 1.2004-1.21 1.6825-0.52505 0.48209-1.1599 0.86394-1.9045 1.1456-0.74462 0.28162-1.5751 0.42242-2.4916 0.42242-0.46777 0-0.91883-0.045344-1.3532-0.13603-0.43436-0.09069-0.84246-0.21718-1.2243-0.37947-0.38185-0.16229-0.7279-0.35321-1.0382-0.57278-0.31026-0.21957-0.57516-0.45822-0.79473-0.71597l0.85917-1.346c0.10501-0.16229 0.2315-0.28639 0.37947-0.37231 0.14797-0.085917 0.32219-0.12888 0.52266-0.12888s0.38185 0.06205 0.54414 0.18615c0.16229 0.1241 0.35321 0.26014 0.57278 0.4081s0.48447 0.284 0.79473 0.4081 0.70881 0.18615 1.1957 0.18615c0.3914 0 0.73745-0.052504 1.0382-0.15751 0.30071-0.10501 0.55369-0.2482 0.75893-0.42958 0.20525-0.18138 0.36037-0.3914 0.46538-0.63006 0.10501-0.23866 0.15751-0.49163 0.15751-0.75893 0-0.32458-0.081143-0.59426-0.24343-0.80905-0.16229-0.21479-0.37946-0.40094-0.65154-0.55846-0.27207-0.15751-0.57994-0.29594-0.92361-0.41526s-0.69449-0.24582-1.0525-0.37947c-0.35799-0.13365-0.70643-0.28639-1.0453-0.45822s-0.64437-0.38901-0.91645-0.65154c-0.27207-0.26252-0.48925-0.58232-0.65154-0.9594-0.16229-0.37708-0.24343-0.83769-0.24343-1.3818 0-0.64915 0.1241-1.2816 0.37231-1.8973 0.24821-0.61574 0.61335-1.1599 1.0954-1.6324 0.48209-0.47254 1.074-0.85201 1.7756-1.1384 0.70166-0.28639 1.5059-0.42958 2.4128-0.42958 0.93554 0 1.7637 0.1599 2.4844 0.4797 0.72075 0.3198 1.3293 0.7279 1.8257 1.2243l-0.91645 1.2888z"/> <path d="m57.693 40.297c0.49639 0 0.94473-0.14341 1.345-0.43023 0.40031-0.28682 0.74258-0.6706 1.0268-1.1513 0.28422-0.48073 0.50239-1.0402 0.65451-1.6785 0.15212-0.63828 0.22818-1.3089 0.22818-2.0118 0-1.0099-0.17013-1.7533-0.5104-2.2299-0.34027-0.47669-0.85466-0.71504-1.5432-0.71504-0.49639 0-0.94473 0.14139-1.345 0.42417s-0.74058 0.66656-1.0208 1.1513c-0.28022 0.48477-0.49639 1.0463-0.6485 1.6846-0.15212 0.63828-0.22818 1.3129-0.22818 2.0239 0 1.0099 0.16813 1.7512 0.50439 2.2239s0.84866 0.70898 1.5372 0.70898zm-0.26421 2.3027c-0.68053 0-1.311-0.11513-1.8915-0.3454s-1.0808-0.56758-1.5012-1.012-0.75058-0.98974-0.99077-1.6361c-0.24019-0.64636-0.36028-1.3856-0.36028-2.2178 0-1.0746 0.17013-2.0764 0.5104-3.0056 0.34027-0.92915 0.80462-1.7331 1.3931-2.4117 0.58846-0.67868 1.275-1.2119 2.0596-1.5997 0.78461-0.38782 1.6213-0.58172 2.51-0.58172 0.68053 0 1.311 0.11513 1.8915 0.3454s1.0828 0.56758 1.5072 1.012c0.42433 0.44438 0.75659 0.98974 0.99678 1.6361 0.24019 0.64636 0.36028 1.3856 0.36028 2.2178 0 1.0665-0.17213 2.0623-0.5164 2.9874-0.34427 0.92511-0.81063 1.729-1.3991 2.4117-0.58846 0.68272-1.275 1.22-2.0596 1.6119-0.78461 0.39186-1.6213 0.58778-2.51 0.58778zm12.177-10.374-1.1649 9.6833-0.61248 2.2784c-0.11209 0.3959-0.28622 0.69888-0.52241 0.90894-0.23619 0.21007-0.57044 0.3151-1.0028 0.3151h-1.1889l1.5732-13.186-0.94874-0.16967c-0.17614-0.032318-0.32025-0.098973-0.43234-0.19997-0.11209-0.10099-0.16813-0.2444-0.16813-0.43023 0-0.0080796 0.0020015-0.024238 0.0060047-0.048477 0.0040031-0.024239 0.010008-0.078775 0.018014-0.16361 0.0080063-0.084835 0.022017-0.21411 0.042033-0.38782 0.020016-0.17371 0.050039-0.41811 0.09007-0.73322h1.6573l0.10808-0.92106c0.088069-0.711 0.27421-1.3493 0.55843-1.9148 0.28422-0.56557 0.6445-1.0463 1.0808-1.4422 0.43634-0.3959 0.93873-0.69888 1.5072-0.90894 0.56845-0.21007 1.1809-0.3151 1.8374-0.3151 0.5124 0 0.98476 0.076755 1.4171 0.23027l-0.26421 1.5513c-0.016013 0.088875-0.054042 0.15957-0.11409 0.21209-0.060047 0.052517-0.1341 0.090894-0.22217 0.11513s-0.18614 0.040398-0.29423 0.048477c-0.10808 0.0080796-0.21817 0.012119-0.33026 0.012119-0.32025 0-0.61448 0.044437-0.88269 0.13331s-0.50439 0.23228-0.70855 0.43023c-0.20416 0.19795-0.37229 0.45649-0.50439 0.77563-0.1321 0.31914-0.22618 0.70897-0.28222 1.1695l-0.096075 0.82411h2.7622l-0.27622 2.133h-2.6421z"/> </g> </g> </svg>
	</div>
	<div class="pods-admin_friends-callout_content-container">
		<h2 class="pods-admin_friends-callout_headline">
			<?php
				printf(
					esc_html__( 'We need %1$sYOU%2$s', 'pods' ),
					'<span class="pods-admin_friends-you">',
					'</span>'
				);
			?>
		</h2>

		<p class="pods-admin_friends-callout_text">
			🎉&nbsp;
			<?php
				printf(
					'%1$s: %2$s',
					esc_html__( 'Pods 2.9 is out and we are building the next feature for Pods 3.0', 'pods' ),
					esc_html__( 'Conditional Logic for Fields', 'pods' )
				);
				/*printf(
					'%1$s: <a href="%2$s" target="_blank" rel="noreferrer">%3$s</a>',
					esc_html__( 'Pods 2.9 is out and we are building the next feature for Pods 3.0', 'pods' ),
					esc_url( $feature_callout_link ),
					esc_html__( 'Conditional Logic for Fields', 'pods' )
				);*/
			?>
		</p>
		<p class="pods-admin_friends-callout_text">
			🤝&nbsp;
			<?php
				esc_html_e( 'Your support makes a direct impact on how quickly our team can finish this important work.', 'pods' );
				echo ' ';
				esc_html_e( 'Pods is fully funded by donations and powered by our community contributors.', 'pods' );
				echo ' ';
				esc_html_e( 'Help us continue our work and get Pods 3.0 completed.', 'pods' );
			?>
		</p>
		<p class="pods-admin_friends-callout_text">
			☑︎️&nbsp;
			<?php
				esc_html_e( 'Donors get to vote on the next feature we work on, they decide what we do next.', 'pods' );
			?>
		</p>
		<p class="pods-admin_friends-callout_text">
			<?php
				printf(
					'<strong>%s</strong>',
					esc_html__( 'Pods 3.0 Funding Progress', 'pods' )
				);
			?>
		</p>
		<div class="pods-admin_progress-bar_container">
			<div class="pods-admin_progress-bar_fill" style="width:<?php echo esc_attr( $progress_width ); ?>%">
				<?php echo esc_attr( ceil( $progress_width ) ); ?>%
			</div>
		</div>
		<div class="pods-admin_friends-callout_button-group">
			<a href="<?php echo esc_url( $learn_more_link ); ?>"
				target="_blank" rel="noreferrer"
				class="pods-admin_friends-callout_button">
				<?php esc_html_e( 'Learn More', 'pods' ); ?>
			</a>
			<a href="<?php echo esc_url( $donate_now_link ); ?>"
				target="_blank" rel="noreferrer"
				class="pods-admin_friends-callout_button--join">
				<?php esc_html_e( 'Donate Now', 'pods' ); ?> &raquo;
			</a>
		</div>
		<p class="pods-admin_friends-callout_text">
			🤗&nbsp;
			<?php
				// translators: %s: Pods Pro by SKCDEV link.
				printf(
					esc_html__( 'You can also check out the new add-ons available from %s which has partnered with Friends of Pods to help bring in more donations.', 'pods' ),
					'<a href="' . esc_url( $pods_pro_link ) . '" target="_blank" rel="noreferrer">Pods Pro by SKCDEV</a>'
				);
			?>
		</p>
	</div>
</div>
