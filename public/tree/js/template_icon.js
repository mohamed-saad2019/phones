
    var expandAllIcon = 
    '<svg class="shadow" width="40" height="40" fill="#9b0000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
      'viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">' +

        '<path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M384,213.333' +
          'c0,5.896-4.771,10.667-10.667,10.667H352c-5.896,0-10.667-4.771-10.667-10.667v-12.5L286.167,256l55.167,55.167v-12.5' +
          'c0-5.896,4.771-10.667,10.667-10.667h21.333c5.896,0,10.667,4.771,10.667,10.667v74.667c0,5.896-4.771,10.667-10.667,10.667' +
          'h-74.667c-5.896,0-10.667-4.771-10.667-10.667V352c0-5.896,4.771-10.667,10.667-10.667h12.5L256,286.167l-55.167,55.167h12.5' +
          'c5.896,0,10.667,4.771,10.667,10.667v21.333c0,5.896-4.771,10.667-10.667,10.667h-74.667c-5.896,0-10.667-4.771-10.667-10.667' +
          'v-74.667c0-5.896,4.771-10.667,10.667-10.667H160c5.896,0,10.667,4.771,10.667,10.667v12.5L225.833,256l-55.167-55.167v12.5' +
          'c0,5.896-4.771,10.667-10.667,10.667h-21.333c-5.896,0-10.667-4.771-10.667-10.667v-74.667c0-5.896,4.771-10.667,10.667-10.667' +
          'h74.667c5.896,0,10.667,4.771,10.667,10.667V160c0,5.896-4.771,10.667-10.667,10.667h-12.5L256,225.833l55.167-55.167h-12.5' +
          'c-5.896,0-10.667-4.771-10.667-10.667v-21.333c0-5.896,4.771-10.667,10.667-10.667h74.667c5.896,0,10.667,4.771,10.667,10.667' +
          'V213.333z"/>';


    var zoomInIcon = '<svg class="shadow" width="40" height="40" fill="#9b0000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
      'width="93.934px" height="93.934px" viewBox="0 0 93.934 93.934" style="enable-background:new 0 0 93.934 93.934;"' +
      'xml:space="preserve">' +

      '<path d="M46.967,0C21.028,0,0,21.028,0,46.967c0,25.939,21.028,46.967,46.967,46.967c25.939,0,46.967-21.027,46.967-46.967' +
        'C93.934,21.028,72.906,0,46.967,0z M74.812,53.924H53.924v20.889H40.01V53.924H19.121V40.01H40.01V19.121h13.914V40.01h20.889' +
        'V53.924z"/>' +

    '</svg>';

    var zoomOutIcon = '<svg class="shadow" width="40" height="40" fill="#9b0000" version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
      'width="438.533px" height="438.533px" viewBox="0 0 438.533 438.533" style="enable-background:new 0 0 438.533 438.533;"' +
      'xml:space="preserve">' +

      '<path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0' +
        'c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267' +
        'c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407' +
        's76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062' +
        'C438.533,179.485,428.732,142.795,409.133,109.203z M347.179,237.539c0,4.948-1.811,9.236-5.428,12.847' +
        'c-3.614,3.614-7.898,5.428-12.847,5.428h-219.27c-4.948,0-9.229-1.813-12.847-5.428c-3.616-3.61-5.424-7.898-5.424-12.847v-36.547' +
        'c0-4.948,1.809-9.231,5.424-12.847c3.617-3.617,7.898-5.426,12.847-5.426h219.27c4.948,0,9.232,1.809,12.847,5.426' +
        'c3.617,3.615,5.428,7.898,5.428,12.847V237.539z"/>' +

    '</svg>';

    var layoutIcon =  '<svg class="shadow" width="64" height="64" fill="#9b0000" height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="#9b0000"/><path d="m397.800781 311.417969v-85.476563h-126.800781v-43.359375h30.03125v-90.0625h-90.0625v90.0625h30.03125v43.359375h-126.800781v85.476563h-30.699219v90.0625h90.0625v-90.0625h-29.363281v-55.476563h96.800781v55.476563h-30.03125v90.0625h90.0625v-90.0625h-30.03125v-55.476563h96.800781v55.476563h-29.363281v90.0625h90.0625v-90.0625zm-156.832031-188.898438h30.0625v30.0625h-30.0625zm-97.40625 248.960938h-30.0625v-30.0625h30.0625zm127.46875 0h-30.0625v-30.0625h30.0625zm127.46875 0h-30.0625v-30.0625h30.0625zm0 0" fill="#fff"/></svg>';

    var detailsIcon = '<svg width="24" height="24" fill="orange" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"' +
                        'viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">' +
                            '<path d="M447.933,103.629c-0.034-3.076-1.224-6.09-3.485-8.352L352.683,3.511c-0.004-0.004-0.007-0.005-0.011-0.008' +
                            'C350.505,1.338,347.511,0,344.206,0H89.278C75.361,0,64.04,11.32,64.04,25.237v461.525c0,13.916,11.32,25.237,25.237,25.237' +
                            'h333.444c13.916,0,25.237-11.32,25.237-25.237V103.753C447.96,103.709,447.937,103.672,447.933,103.629z M356.194,40.931' +
                            'l50.834,50.834h-49.572c-0.695,0-1.262-0.567-1.262-1.262V40.931z M423.983,486.763c0,0.695-0.566,1.261-1.261,1.261H89.278' +
                            'c-0.695,0-1.261-0.566-1.261-1.261V25.237c0-0.695,0.566-1.261,1.261-1.261h242.94v66.527c0,13.916,11.322,25.239,25.239,25.239' +
                            'h66.527V486.763z"/>' +

                            '<path d="M362.088,164.014H149.912c-6.62,0-11.988,5.367-11.988,11.988c0,6.62,5.368,11.988,11.988,11.988h212.175' +
                                'c6.62,0,11.988-5.368,11.988-11.988C374.076,169.381,368.707,164.014,362.088,164.014z"/>' +

                            '<path d="M362.088,236.353H149.912c-6.62,0-11.988,5.368-11.988,11.988c0,6.62,5.368,11.988,11.988,11.988h212.175' +
                                'c6.62,0,11.988-5.368,11.988-11.988C374.076,241.721,368.707,236.353,362.088,236.353z"/>' +

                            '<path d="M362.088,308.691H149.912c-6.62,0-11.988,5.368-11.988,11.988c0,6.621,5.368,11.988,11.988,11.988h212.175' +
                                'c6.62,0,11.988-5.367,11.988-11.988C374.076,314.06,368.707,308.691,362.088,308.691z"/>' +

                            '<path d="M256,381.031H149.912c-6.62,0-11.988,5.368-11.988,11.988c0,6.621,5.368,11.988,11.988,11.988H256' +
                                'c6.62,0,11.988-5.367,11.988-11.988C267.988,386.398,262.62,381.031,256,381.031z"/>' +
                          '</svg>';

    var editIcon = '<svg width="24" height="24" fill="#000097" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"' +
                      'viewBox="0 0 469.336 469.336" style="enable-background:new 0 0 469.336 469.336;" xml:space="preserve">' +
                        '<path d="M456.836,76.168l-64-64.054c-16.125-16.139-44.177-16.17-60.365,0.031L45.763,301.682' +
                            'c-1.271,1.282-2.188,2.857-2.688,4.587L0.409,455.73c-1.063,3.722-0.021,7.736,2.719,10.478c2.031,2.033,4.75,3.128,7.542,3.128' +
                            'c0.979,0,1.969-0.136,2.927-0.407l149.333-42.703c1.729-0.5,3.302-1.418,4.583-2.69l289.323-286.983' +
                            'c8.063-8.069,12.5-18.787,12.5-30.192S464.899,84.237,456.836,76.168z M285.989,89.737l39.264,39.264L120.257,333.998' +
                            'l-14.712-29.434c-1.813-3.615-5.5-5.896-9.542-5.896H78.921L285.989,89.737z M26.201,443.137L40.095,394.5l34.742,34.742' +
                            'L26.201,443.137z M149.336,407.96l-51.035,14.579l-51.503-51.503l14.579-51.035h28.031l18.385,36.771' +
                            'c1.031,2.063,2.708,3.74,4.771,4.771l36.771,18.385V407.96z M170.67,390.417v-17.082c0-4.042-2.281-7.729-5.896-9.542' +
                            'l-29.434-14.712l204.996-204.996l39.264,39.264L170.67,390.417z M441.784,121.72l-47.033,46.613l-93.747-93.747l46.582-47.001' +
                            'c8.063-8.063,22.104-8.063,30.167,0l64,64c4.031,4.031,6.25,9.385,6.25,15.083S445.784,117.72,441.784,121.72z"/>' +
                      '</svg>';


    var addIcon = '<svg width="24" height="24" fill="green" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
                      'viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">' +

                  '<path d="M225,0C150.561,0,90,60.561,90,135s60.561,135,135,135s135-60.561,135-135S299.439,0,225,0z M225,240' +
                  'c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C330,192.897,282.897,240,225,240z"/>' +

                  '<path d="M407,302c-23.388,0-45.011,7.689-62.483,20.667C315.766,308.001,284.344,300,255,300h-60' +
                  'c-52.009,0-101.006,20.667-137.966,58.195C20.255,395.539,0,444.834,0,497c0,8.284,6.716,15,15,15h392' +
                  'c57.897,0,105-47.103,105-105C512,349.103,464.897,302,407,302z M30.66,482c7.515-85.086,78.351-152,164.34-152h60' +
                  'c21.784,0,45.088,5.346,67.152,15.224C309.487,362.57,302,383.926,302,407c0,29.354,12.113,55.927,31.596,75H30.66z M407,482' +
                  'c-41.355,0-75-33.645-75-75c0-21.876,9.418-41.591,24.409-55.313c0.052-0.048,0.103-0.098,0.154-0.147' +
                  'C369.893,339.407,387.597,332,407,332c41.355,0,75,33.645,75,75C482,448.355,448.355,482,407,482z"/>' +

                  '<path d="M437,392h-15v-15c0-8.284-6.716-15-15-15s-15,6.716-15,15v15h-15c-8.284,0-15,6.716-15,15s6.716,15,15,15h15v15' +
                  'c0,8.284,6.716,15,15,15s15-6.716,15-15v-15h15c8.284,0,15-6.716,15-15S445.284,392,437,392z"/>' +

                  '</svg>';

var pdfIcon =   '<svg width="35" height="35" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
                'viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">' +
                '<polygon style="fill:#EFEEEE;" points="64,0 64,384 288,384 384,288 384,0 "/>' +
                '<polygon style="fill:#ABABAB;" points="288,288 288,384 384,288 "/>' +
                '<polygon style="fill:#DEDEDD;" points="192,384 288,384 288,288 "/>' +
                '<path style="fill:#CB5641;" d="M0,96v112h256V96H0z"/>' +

                '<path style="fill:#FFFFFF;" d="M60.992,117.856c3.52,0,6.464,0.592,8.88,1.776s4.336,2.736,5.808,4.656s2.528,4.112,3.168,6.576' +
                    'c0.624,2.448,0.96,4.976,0.96,7.536c0,3.52-0.528,6.592-1.584,9.216c-1.056,2.624-2.528,4.768-4.416,6.416' +
                    'c-1.888,1.664-4.176,2.928-6.864,3.744c-2.688,0.816-5.664,1.264-8.928,1.264h-7.392v27.36H36.8v-68.544L60.992,117.856z' +
                    'M56.768,148.896c2.752,0,4.992-0.848,6.672-2.512c1.696-1.664,2.544-4.256,2.544-7.776c0-3.456-0.736-6.08-2.208-7.872' +
                    'c-1.472-1.776-3.936-2.688-7.392-2.688h-5.76v20.848L56.768,148.896L56.768,148.896z"/>' +
                '<path style="fill:#FFFFFF;" d="M119.552,117.84c4.816,0,8.672,0.8,11.632,2.368c2.944,1.568,5.232,3.792,6.864,6.72' +
                    'c1.648,2.912,2.736,6.4,3.312,10.512c0.576,4.096,0.864,8.672,0.864,13.712c0,6.016-0.352,11.248-1.088,15.696' +
                    'c-0.736,4.432-2,8.112-3.792,10.992c-1.792,2.896-4.192,5.024-7.2,6.432s-6.816,2.112-11.424,2.112H96.896V117.84L119.552,117.84' +
                    'L119.552,117.84z M116.864,176.24c2.432,0,4.384-0.416,5.856-1.248s2.64-2.208,3.504-4.128c0.88-1.92,1.456-4.448,1.728-7.6' +
                    'c0.288-3.12,0.432-7.024,0.432-11.696c0-3.904-0.144-7.328-0.384-10.288c-0.256-2.944-0.784-5.392-1.584-7.344' +
                    'c-0.816-1.952-1.984-3.424-3.568-4.4c-1.568-0.992-3.664-1.504-6.288-1.504h-5.84v48.208L116.864,176.24z"/>' +
                '<path style="fill:#FFFFFF;" d="M199.232,117.856v11.328h-24.48v16.128h23.04v11.328h-23.04v29.76h-13.824v-68.544L199.232,117.856z' +
                    '"/>';

  var pngIcon = '<svg width="35" height="35" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
                'viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">' +
                '<linearGradient id="PNGID_1_" gradientUnits="userSpaceOnUse" x1="-88.6647" y1="552.8239" x2="-35.8147" y2="499.9769" gradientTransform="matrix(8 0 0 -8 818.6472 4499.9277)">' +
                '<stop  offset="0" style="stop-color:#EFEEEE"/>' +
                '<stop  offset="1" style="stop-color:#DEDEDD"/>' +
                '</linearGradient>' +
                '<polygon style="fill:url(#PNGID_1_);" points="64,0 64,384 288,384 384,288 384,0 "/>' +
                '<polygon style="fill:#ABABAB;" points="288,288 288,384 384,288 "/>' +
                '<polygon style="fill:#DEDEDD;" points="192,384 288,384 288,288 "/>' +
                '<path style="fill:#000097;" d="M0,96v112h256V96H0z"/>' +
                '<path style="fill:#FFFFFF;" d="M60.992,117.856c3.52,0,6.464,0.592,8.88,1.776s4.336,2.736,5.808,4.656s2.528,4.112,3.168,6.576' +
                    'c0.624,2.448,0.96,4.976,0.96,7.536c0,3.52-0.528,6.592-1.584,9.216s-2.528,4.768-4.416,6.416' +
                    'c-1.888,1.664-4.176,2.928-6.864,3.744s-5.664,1.264-8.928,1.264h-7.392v27.36H36.8v-68.544L60.992,117.856z M56.768,148.896' +
                    'c2.752,0,4.992-0.848,6.672-2.512c1.696-1.664,2.544-4.256,2.544-7.776c0-3.456-0.736-6.08-2.208-7.872' +
                    'c-1.472-1.776-3.936-2.688-7.392-2.688h-5.76v20.848L56.768,148.896L56.768,148.896z"/>' +
                '<path style="fill:#FFFFFF;" d="M128.864,164.816h0.208v-46.96h12.672V186.4h-15.76l-16.896-48h-0.192v48H96.224v-68.544h15.936' +
                    'L128.864,164.816z"/>' +
                '<path style="fill:#FFFFFF;" d="M190.928,134.288c-0.288-1.344-0.752-2.576-1.392-3.696c-0.64-1.104-1.456-2.048-2.432-2.784' +
                    'c-0.992-0.736-2.208-1.104-3.616-1.104c-3.328,0-5.712,1.856-7.2,5.584c-1.472,3.696-2.208,9.856-2.208,18.416' +
                    'c0,4.112,0.128,7.808,0.384,11.136s0.72,6.16,1.392,8.496s1.632,4.128,2.88,5.376c1.248,1.248,2.864,1.872,4.848,1.872' +
                    'c0.848,0,1.744-0.24,2.752-0.672c0.992-0.448,1.904-1.12,2.784-2.016c0.864-0.912,1.584-2.032,2.16-3.408s0.864-3.008,0.864-4.864' +
                    'v-7.008h-9.104V149.44h22.352v36.96H195.2v-6.336h-0.192c-1.664,2.704-3.664,4.592-6,5.712c-2.336,1.12-5.136,1.68-8.4,1.68' +
                    'c-4.224,0-7.664-0.752-10.336-2.224c-2.672-1.472-4.736-3.728-6.24-6.816c-1.504-3.088-2.512-6.864-3.008-11.376' +
                    'c-0.512-4.512-0.784-9.744-0.784-15.696c0-5.744,0.368-10.816,1.104-15.152c0.736-4.352,2-7.984,3.792-10.912' +
                    'c1.776-2.912,4.16-5.088,7.088-6.576c2.96-1.472,6.624-2.208,11.04-2.208c7.552,0,12.992,1.872,16.32,5.632' +
                    'c3.328,3.728,4.992,9.088,4.992,16.08H191.36C191.36,136.944,191.216,135.632,190.928,134.288z"/>';

  var svgIcon = '<svg width="35" height="35" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
                'viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">' +
                '<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-89.7993" y1="548.9443" x2="-36.9513" y2="496.0983" gradientTransform="matrix(8 0 0 -8 827.7248 4468.8887)">' +
                '<stop  offset="0" style="stop-color:#EFEEEE"/>' +
                '<stop  offset="1" style="stop-color:#DEDEDD"/>' +
                '</linearGradient>' +
                '<polygon style="fill:url(#SVGID_1_);" points="64,0 64,384 288,384 384,288 384,0 "/>' +
                '<polygon style="fill:#ABABAB;" points="288,288 288,384 384,288 "/>' +
                '<polygon style="fill:#DEDEDD;" points="192,384 288,384 288,288 "/>' +
                '<path style="fill:orange;" d="M0,96v112h256V96L0,96L0,96z"/>' +
                '<path style="fill:#FFFFFF;" d="M47.904,167.008c0,1.6,0.16,3.056,0.416,4.352c0.256,1.312,0.736,2.416,1.44,3.312' +
                    'c0.704,0.912,1.648,1.616,2.832,2.128c1.184,0.496,2.672,0.768,4.464,0.768c2.112,0,4.016-0.688,5.696-2.064' +
                    'c1.696-1.376,2.544-3.52,2.544-6.384c0-1.536-0.208-2.864-0.624-3.984c-0.4-1.12-1.088-2.128-2.064-3.008' +
                    'c-0.96-0.912-2.224-1.712-3.792-2.448c-1.568-0.736-3.504-1.488-5.792-2.256c-3.072-1.024-5.728-2.16-7.968-3.376' +
                    'c-2.256-1.2-4.112-2.624-5.632-4.272c-1.504-1.632-2.608-3.52-3.312-5.664c-0.704-2.16-1.04-4.624-1.04-7.456' +
                    'c0-6.784,1.888-11.824,5.664-15.152s8.976-4.992,15.568-4.992c3.056,0,5.904,0.336,8.48,1.008c2.592,0.672,4.848,1.744,6.736,3.264' +
                    'c1.872,1.504,3.36,3.424,4.4,5.744c1.056,2.336,1.6,5.136,1.6,8.4v1.92H64.272c0-3.264-0.576-5.776-1.728-7.552' +
                    'c-1.152-1.744-3.072-2.64-5.76-2.64c-1.536,0-2.816,0.24-3.824,0.672c-1.024,0.448-1.84,1.04-2.448,1.776' +
                    'c-0.608,0.736-1.056,1.616-1.28,2.576c-0.224,0.96-0.336,1.952-0.336,2.976c0,2.128,0.432,3.888,1.344,5.328' +
                    'c0.896,1.456,2.816,2.784,5.744,3.984l10.656,4.608c2.624,1.152,4.768,2.352,6.432,3.616c1.664,1.248,2.992,2.592,3.984,4.032' +
                    's1.664,3.008,2.064,4.752c0.384,1.712,0.576,3.648,0.576,5.744c0,7.232-2.096,12.496-6.304,15.792' +
                    'c-4.192,3.296-10.032,4.96-17.52,4.96c-7.808,0-13.392-1.696-16.752-5.088s-5.04-8.256-5.04-14.592v-2.784h13.824L47.904,167.008' +
                    'L47.904,167.008z"/>' +
                '<path style="fill:#FFFFFF;" d="M116.192,168.544h0.288l10.176-50.688h14.32l-15.76,68.544h-17.76l-15.728-68.544h14.784' +
                    'L116.192,168.544z"/>' +
                '<path style="fill:#FFFFFF;" d="M185.648,134.288c-0.288-1.344-0.752-2.576-1.392-3.696c-0.64-1.104-1.456-2.048-2.432-2.784' +
                    'c-0.992-0.736-2.208-1.104-3.616-1.104c-3.328,0-5.712,1.856-7.2,5.584c-1.472,3.696-2.208,9.856-2.208,18.416' +
                    'c0,4.112,0.128,7.808,0.384,11.136s0.72,6.16,1.392,8.496s1.632,4.128,2.88,5.376c1.248,1.248,2.864,1.872,4.848,1.872' +
                    'c0.848,0,1.744-0.24,2.752-0.672c0.992-0.448,1.904-1.12,2.784-2.016c0.864-0.912,1.584-2.032,2.16-3.408s0.864-3.008,0.864-4.864' +
                    'v-7.008h-9.104V149.44h22.352v36.96H189.92v-6.336h-0.192c-1.664,2.704-3.664,4.592-6,5.712c-2.336,1.12-5.136,1.68-8.4,1.68' +
                    'c-4.224,0-7.664-0.752-10.336-2.224c-2.656-1.472-4.736-3.728-6.24-6.816c-1.504-3.088-2.512-6.864-3.008-11.376' +
                    'c-0.512-4.512-0.784-9.744-0.784-15.696c0-5.744,0.368-10.816,1.104-15.152c0.736-4.352,2-7.984,3.792-10.912' +
                    'c1.776-2.912,4.16-5.088,7.088-6.576c2.96-1.472,6.624-2.208,11.04-2.208c7.552,0,12.992,1.872,16.32,5.632' +
                    'c3.328,3.728,4.992,9.088,4.992,16.08H186.08C186.08,136.944,185.936,135.632,185.648,134.288z"/>'; 

var csvIcon = '<svg width="35" height="35"version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"' +
                'viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">' +
                '<polygon style="fill:#EFEEEE;" points="64,0 64,384 288,384 384,288 384,0 "/>' +
                '<polygon style="fill:#ABABAB;" points="288,288 288,384 384,288 "/>' +
                '<polygon style="fill:#DEDEDD;" points="192,384 288,384 288,288 "/>' +
                '<path style="fill:#448E47;" d="M0,96v112h256V96L0,96L0,96z"/>' +

                '<path style="fill:#FFFFFF;" d="M64.32,130.112c-1.184-2.288-3.344-3.424-6.48-3.424c-1.728,0-3.152,0.464-4.272,1.408' +
                    'c-1.12,0.928-2,2.416-2.64,4.496s-1.088,4.8-1.344,8.176c-0.272,3.36-0.384,7.472-0.384,12.336c0,5.184,0.176,9.376,0.528,12.576' +
                    'c0.336,3.2,0.896,5.664,1.632,7.44s1.664,2.96,2.784,3.552c1.12,0.608,2.416,0.928,3.888,0.928c1.216,0,2.352-0.208,3.408-0.624' +
                    's1.968-1.248,2.736-2.496c0.784-1.248,1.392-3.008,1.824-5.28c0.448-2.272,0.672-5.264,0.672-8.976H80.48' +
                    'c0,3.696-0.288,7.232-0.864,10.56s-1.664,6.24-3.216,8.736c-1.584,2.48-3.776,4.432-6.624,5.84' +
                    'c-2.848,1.408-6.544,2.128-11.088,2.128c-5.168,0-9.312-0.848-12.368-2.496c-3.072-1.664-5.424-4.064-7.056-7.2' +
                    's-2.688-6.88-3.168-11.232c-0.464-4.336-0.72-9.152-0.72-14.384c0-5.184,0.256-9.968,0.72-14.352' +
                    'c0.48-4.368,1.552-8.144,3.168-11.28c1.648-3.12,3.984-5.584,7.056-7.344c3.056-1.744,7.2-2.64,12.368-2.64' +
                    'c4.944,0,8.816,0.8,11.664,2.4c2.848,1.6,4.976,3.632,6.368,6.096s2.304,5.12,2.64,7.968c0.352,2.848,0.528,5.52,0.528,8.016H66.08' +
                    'C66.08,136,65.488,132.368,64.32,130.112z"/>' +
                '<path style="fill:#FFFFFF;" d="M109.072,167.008c0,1.6,0.144,3.056,0.384,4.352c0.272,1.312,0.736,2.416,1.44,3.312' +
                    'c0.704,0.912,1.664,1.616,2.848,2.128c1.168,0.496,2.672,0.768,4.448,0.768c2.128,0,4.016-0.688,5.712-2.064' +
                    'c1.68-1.376,2.544-3.52,2.544-6.384c0-1.536-0.224-2.864-0.624-3.984c-0.416-1.12-1.104-2.128-2.064-3.008' +
                    'c-0.976-0.912-2.24-1.712-3.792-2.448s-3.504-1.488-5.808-2.256c-3.056-1.024-5.712-2.16-7.968-3.376' +
                    'c-2.24-1.2-4.112-2.624-5.616-4.272c-1.504-1.632-2.608-3.52-3.312-5.664c-0.704-2.16-1.056-4.624-1.056-7.456' +
                    'c0-6.784,1.888-11.824,5.664-15.152c3.76-3.328,8.96-4.992,15.552-4.992c3.072,0,5.904,0.336,8.496,1.008s4.832,1.744,6.72,3.264' +
                    'c1.888,1.504,3.36,3.424,4.416,5.744c1.04,2.336,1.584,5.136,1.584,8.4v1.92h-13.232c0-3.264-0.576-5.776-1.712-7.552' +
                    'c-1.152-1.744-3.072-2.64-5.76-2.64c-1.536,0-2.816,0.24-3.84,0.672c-1.008,0.448-1.84,1.04-2.448,1.776s-1.04,1.616-1.264,2.576' +
                    'c-0.24,0.96-0.336,1.952-0.336,2.976c0,2.128,0.448,3.888,1.344,5.328c0.896,1.456,2.816,2.784,5.76,3.984l10.656,4.608' +
                    'c2.624,1.152,4.768,2.352,6.416,3.616c1.664,1.248,3.008,2.592,3.984,4.032c0.992,1.44,1.68,3.008,2.064,4.752' +
                    'c0.384,1.712,0.576,3.648,0.576,5.744c0,7.232-2.096,12.496-6.288,15.792c-4.192,3.296-10.032,4.96-17.52,4.96' +
                    'c-7.808,0-13.392-1.696-16.768-5.088c-3.36-3.392-5.024-8.256-5.024-14.592v-2.784h13.824L109.072,167.008L109.072,167.008z"/>' +
                '<path style="fill:#FFFFFF;" d="M177.344,168.544h0.304l10.176-50.688h14.32L186.4,186.4h-17.76l-15.728-68.544h14.784' +
                    'L177.344,168.544z"/>';
var removeIcon = '<svg width="24" height="24" fill="red" viewBox="-47 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m416.875 114.441406-11.304688-33.886718c-4.304687-12.90625-16.339843-21.578126-29.941406-21.578126h-95.011718v-30.933593c0-15.460938-12.570313-28.042969-28.027344-28.042969h-87.007813c-15.453125 0-28.027343 12.582031-28.027343 28.042969v30.933593h-95.007813c-13.605469 0-25.640625 8.671876-29.945313 21.578126l-11.304687 33.886718c-2.574219 7.714844-1.2695312 16.257813 3.484375 22.855469 4.753906 6.597656 12.445312 10.539063 20.578125 10.539063h11.816406l26.007813 321.605468c1.933594 23.863282 22.183594 42.558594 46.109375 42.558594h204.863281c23.921875 0 44.175781-18.695312 46.105469-42.5625l26.007812-321.601562h6.542969c8.132812 0 15.824219-3.941407 20.578125-10.535157 4.753906-6.597656 6.058594-15.144531 3.484375-22.859375zm-249.320312-84.441406h83.0625v28.976562h-83.0625zm162.804687 437.019531c-.679687 8.402344-7.796875 14.980469-16.203125 14.980469h-204.863281c-8.40625 0-15.523438-6.578125-16.203125-14.980469l-25.816406-319.183593h288.898437zm-298.566406-349.183593 9.269531-27.789063c.210938-.640625.808594-1.070313 1.484375-1.070313h333.082031c.675782 0 1.269532.429688 1.484375 1.070313l9.269531 27.789063zm0 0"/><path d="m282.515625 465.957031c.265625.015625.527344.019531.792969.019531 7.925781 0 14.550781-6.210937 14.964844-14.21875l14.085937-270.398437c.429687-8.273437-5.929687-15.332031-14.199219-15.761719-8.292968-.441406-15.328125 5.925782-15.761718 14.199219l-14.082032 270.398437c-.429687 8.273438 5.925782 15.332032 14.199219 15.761719zm0 0"/><path d="m120.566406 451.792969c.4375 7.996093 7.054688 14.183593 14.964844 14.183593.273438 0 .554688-.007812.832031-.023437 8.269531-.449219 14.609375-7.519531 14.160157-15.792969l-14.753907-270.398437c-.449219-8.273438-7.519531-14.613281-15.792969-14.160157-8.269531.449219-14.609374 7.519532-14.160156 15.792969zm0 0"/><path d="m209.253906 465.976562c8.285156 0 15-6.714843 15-15v-270.398437c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v270.398437c0 8.285157 6.714844 15 15 15zm0 0"/></svg>';
