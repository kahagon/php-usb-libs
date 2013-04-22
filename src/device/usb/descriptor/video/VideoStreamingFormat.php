<?php
namespace device\usb\descriptor\video;
require_once 'data/Descriptor.php';
use data\Descriptor;

/**
 * Description of VideoStreamingHeader
 *
 * @property int $bLength               \data\DescriptorField 1
 * @property int $bDescriptorType       \data\DescriptorField 1
 * @property int $bDescriptorSubtype    \data\DescriptorField 1
 * @property int $bFormatIndex          \data\DescriptorField 1
 * @property int $bNumFrameDescriptors  \data\DescriptorField 1
 * @property int $bmFlags               \data\DescriptorField 1
 * @property int $bDefaultFrameIndex    \data\DescriptorField 1
 * @property int $bAspectRatioX         \data\DescriptorField 1
 * @property int $bAspectRatioY         \data\DescriptorField 1
 * @property int $bmInterfaceFlags      \data\DescriptorField 1
 * @property int $bCopyProtect          \data\DescriptorField 1
 * 
 * @author oasynnoum
 */
class VideoStreamingFormat extends Descriptor {
}