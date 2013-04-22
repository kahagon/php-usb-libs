<?php
namespace device\usb\descriptor\video;
require_once 'data/Descriptor.php';
require_once realpath(dirname(__FILE__) . '/VideoStreamingFormat.php');
use data\Descriptor;

/**
 * Description of VideoStreamingHeader
 *
 * @property int $bLength               \data\DescriptorField 1
 * @property int $bDescriptorType       \data\DescriptorField 1
 * @property int $bDescriptorSubtype    \data\DescriptorField 1
 * @property int $bNumFormats           \data\DescriptorField 1
 * @property int $wTotalLength          \data\DescriptorField 2
 * @property int $bmInfo                \data\DescriptorField 1
 * @property int $bTerminalLink         \data\DescriptorField 1
 * @property int $bStillCaptureMethod   \data\DescriptorField 1
 * @property int $bTriggerSupport       \data\DescriptorField 1
 * @property int $bTriggerUsage         \data\DescriptorField 1
 * @property int $bControlSize          \data\DescriptorField 1
 * @property int $bmaControls           \data\DescriptorField 1
 * 
 * @author oasynnoum
 */
class VideoStreamingHeader extends Descriptor {
    
    /**
     *
     * @var array
     */
    private $vsFormatDescriptorList = [];
    
    public function __construct($data = null, $offset = 0) {
        parent::__construct($data, $offset);
        $formatDescriptorOffset = $this->getLength() + 1;
        for ($i = 0; $i < $this->bNumFormats; $i++) {
            $vsFormatLength = unpack('C', $data[$formatDescriptorOffset])[1];
            $this->vsFormatDescriptorList[] = new VideoStreamingFormat(substr($data, $formatDescriptorOffset, $vsFormatLength));
            $formatDescriptorOffset += $vsFormatLength;
        }
    }
    
    public function getFormatList() {
        return $this->vsFormatDescriptorList;
    }
}
