<?php

namespace Webmen\StructuredData\Extensions;

use SilverStripe\Core\Extension;

class StructuredDataExtension extends Extension {

    public function StructuredData(){
        return \Webmen\StructuredData\StructuredData::render();
    }

}
