<?php
require_once realpath(dirname(__FILE__) . '/../src/device/usb/descriptor/video/VideoStreamingHeader.php');
use device\usb\descriptor\video\VideoStreamingHeader;

$vshRawData = file_get_contents(realpath(dirname(__FILE__) . '/../data/video-streaming-header-descriptor.bin'));
$vsHeader = new VideoStreamingHeader($vshRawData);

print "bLength              : " . $vsHeader->bLength . PHP_EOL;
print "bDescriptorType      : " . $vsHeader->bDescriptorType . PHP_EOL;
print "bDescriptorSubtype   : " . $vsHeader->bDescriptorSubtype . PHP_EOL;
print "bNumFormats          : " . $vsHeader->bNumFormats . PHP_EOL;
print "wTotalLength         : " . $vsHeader->wTotalLength . PHP_EOL;
print "bmInfo               : " . $vsHeader->bmInfo . PHP_EOL;
print "bTerminalLink        : " . $vsHeader->bTerminalLink . PHP_EOL;
print "bStillCaptureMethod  : " . $vsHeader->bStillCaptureMethod . PHP_EOL;
print "bTriggerSupport      : " . $vsHeader->bTriggerSupport . PHP_EOL;
print "bTriggerUsage        : " . $vsHeader->bTriggerUsage . PHP_EOL;
print "bControlSize         : " . $vsHeader->bControlSize . PHP_EOL;
print "bmaControls          : " . $vsHeader->bmaControls . PHP_EOL;

foreach ($vsHeader->getFormatList() as $vsFormat) {
    print "    bLength              : " . $vsFormat->bLength . PHP_EOL;
    print "    bDescriptorType      : " . $vsFormat->bDescriptorType . PHP_EOL;
    print "    bDescriptorSubtype   : " . $vsFormat->bDescriptorSubtype . PHP_EOL;
    print "    bFormatIndex         : " . $vsFormat->bFormatIndex . PHP_EOL;
    print "    bNumFrameDescriptors : " . $vsFormat->bNumFrameDescriptors . PHP_EOL;
    print "    bmFlags              : " . $vsFormat->bmFlags . PHP_EOL;
    print "    bDefaultFrameIndex   : " . $vsFormat->bDefaultFrameIndex . PHP_EOL;
    print "    bAspectRatioX        : " . $vsFormat->bAspectRatioX . PHP_EOL;
    print "    bAspectRatioY        : " . $vsFormat->bAspectRatioY . PHP_EOL;
    print "    bmInterfaceFlags     : " . $vsFormat->bmInterfaceFlags . PHP_EOL;
    print "    bCopyProtect         : " . $vsFormat->bCopyProtect . PHP_EOL;
}