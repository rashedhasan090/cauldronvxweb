@extends('adminlte::page')

@section('title', 'Cauldron VX')

@section('content_header')
    <h1><b>Welcome To the Dashboard ! You are Now Logged In                                 .  </b> 
    
 
      <style>
      .sbx-custom {
        display: inline-block;
        position: relative;
        width: 300px;
        height: 51px;
        white-space: nowrap;
        box-sizing: border-box;
        font-size: 14px;
      }
      
      .sbx-custom__wrapper {
        width: 100%;
        height: 100%;
      }
      
      .sbx-custom__input {
        display: inline-block;
        -webkit-transition: box-shadow .4s ease, background .4s ease;
        transition: box-shadow .4s ease, background .4s ease;
        border: 0;
        border-radius: 26px;
        box-shadow: inset 0 0 0 2px #CCCCCC;
        background: #FFFFFF;
        padding: 0;
        padding-right: 41px;
        padding-left: 51px;
        width: 100%;
        height: 100%;
        vertical-align: middle;
        white-space: normal;
        font-size: inherit;
        -webkit-appearance: none;
           -moz-appearance: none;
                appearance: none;
      }
      
      .sbx-custom__input::-webkit-search-decoration, .sbx-custom__input::-webkit-search-cancel-button, .sbx-custom__input::-webkit-search-results-button, .sbx-custom__input::-webkit-search-results-decoration {
        display: none;
      }
      
      .sbx-custom__input:hover {
        box-shadow: inset 0 0 0 2px #b3b3b3;
      }
      
      .sbx-custom__input:focus, .sbx-custom__input:active {
        outline: 0;
        box-shadow: inset 0 0 0 2px #5D41FF;
        background: #FFFFFF;
      }
      
      .sbx-custom__input::-webkit-input-placeholder {
        color: #BBBBBB;
      }
      
      .sbx-custom__input::-moz-placeholder {
        color: #BBBBBB;
      }
      
      .sbx-custom__input:-ms-input-placeholder {
        color: #BBBBBB;
      }
      
      .sbx-custom__input::placeholder {
        color: #BBBBBB;
      }
      
      .sbx-custom__submit {
        position: absolute;
        top: 0;
        right: inherit;
        left: 0;
        margin: 0;
        border: 0;
        border-radius: 25px 0 0 25px;
        background-color: rgba(255, 255, 255, 0);
        padding: 0;
        width: 51px;
        height: 100%;
        vertical-align: middle;
        text-align: center;
        font-size: inherit;
        -webkit-user-select: none;
           -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
      }
      
      .sbx-custom__submit::before {
        display: inline-block;
        margin-right: -4px;
        height: 100%;
        vertical-align: middle;
        content: '';
      }
      
      .sbx-custom__submit:hover, .sbx-custom__submit:active {
        cursor: pointer;
      }
      
      .sbx-custom__submit:focus {
        outline: 0;
      }
      
      .sbx-custom__submit svg {
        width: 31px;
        height: 31px;
        vertical-align: middle;
        fill: #5EB8FF;
      }
      
      .sbx-custom__reset {
        display: none;
        position: absolute;
        top: 12px;
        right: 12px;
        margin: 0;
        border: 0;
        background: none;
        cursor: pointer;
        padding: 0;
        font-size: inherit;
        -webkit-user-select: none;
           -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        fill: rgba(0, 0, 0, 0.5);
      }
      
      .sbx-custom__reset:focus {
        outline: 0;
      }
      
      .sbx-custom__reset svg {
        display: block;
        margin: 4px;
        width: 19px;
        height: 19px;
      }
      
      .sbx-custom__input:valid ~ .sbx-custom__reset {
        display: block;
        -webkit-animation-name: sbx-reset-in;
                animation-name: sbx-reset-in;
        -webkit-animation-duration: .15s;
                animation-duration: .15s;
      }
      
      @-webkit-keyframes sbx-reset-in {
        0% {
          -webkit-transform: translate3d(-20%, 0, 0);
                  transform: translate3d(-20%, 0, 0);
          opacity: 0;
        }
        100% {
          -webkit-transform: none;
                  transform: none;
          opacity: 1;
        }
      }
      
      @keyframes sbx-reset-in {
        0% {
          -webkit-transform: translate3d(-20%, 0, 0);
                  transform: translate3d(-20%, 0, 0);
          opacity: 0;
        }
        100% {
          -webkit-transform: none;
                  transform: none;
          opacity: 1;
        }
      }
      
      
          </style> 
      
          <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
              <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
              fill-rule="evenodd" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
              <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
              fill-rule="evenodd" />
            </symbol>
          </svg>
          
          <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
            <div role="search" class="sbx-custom__wrapper">
              <input type="search" name="search" placeholder="Search your website" autocomplete="off" required="required" class="sbx-custom__input">
              <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                <svg role="img" aria-label="Search">
                  <use xlink:href="#sbx-icon-search-18"></use>
                </svg>
              </button>
              <button type="reset" title="Clear the search query." class="sbx-custom__reset">
                <svg role="img" aria-label="Reset">
                  <use xlink:href="#sbx-icon-clear-5"></use>
                </svg>
              </button>
            </div>
          </form>
          <script type="text/javascript">
            document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
          </script>
      
    
    
    </h1>
 
   
   
    <br> 
    <br> 
@stop

@section('content')


<style> 
.button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 60px 100px;
    border: 3px solid #7f7ee8;
    border-radius: 41px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74c2b5));
    background: -moz-linear-gradient(top, #f5f5f5, #74c2b5);
    background: linear-gradient(to bottom, #f5f5f5, #74c2b5);
    font: normal normal bold 20px arial;
    color: #1d759e;
    text-decoration: none;
}
.button:hover,
.button:focus {
    border: 3px solid #a5a4ff;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8be9d9));
    background: -moz-linear-gradient(top, #ffffff, #8be9d9);
    background: linear-gradient(to bottom, #ffffff, #8be9d9);
    color: #1d759e;
    text-decoration: none;
}
.button:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74c2b5));
    background: -moz-linear-gradient(top, #939393, #74c2b5);
    background: linear-gradient(to bottom, #939393, #74c2b5);
}
.button:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAACqUlEQVRIibWVSWsUURSFv1NKaDRiQC2C4EY3GlBI0HYAdSONi7gT8S+IC10aXIiCRHCjC3+AqCCSjRhFVBBbTCRgyEoQRJwNJkaxW9NpO3Vc1EClTRwwudTwhlvnvnveufUEBCygpeDRHPPRfLSbMwjmu/27AP9t+lvA7nN32oEDSfda/9HS6L8ESPkKAMrj1S7gOFADTpy9PFgHDxq1gxGMGm3fuHt5C3ASKACnezuLw01Y0eKmgFF5vNIK3BSEjsc2GfeTgINAbgcfQnQLOgBsdvQMD63r7SpW84BB7h0AgaR2ILSEJID1ixYFbRJIIh4SgdSGWQ8CC0EoEeawAIK8TCMgMnoJDGCni+ibno4ugRvxSo3tRhT5ItAXuxjDAPA6hwUQNe8BAA8+VVplHQRqsq/tXLWs3n3uzh7gcOJyof9o6d6xkaEWmQNAwebqma7i9+Y9+EVFD8cqKy31AnuBBtD3rlI7eeX6cAewK3Err9lSeNq2pHBCsN+wGLgN9PR2FsfzeDMyKI9VWxCPgM0Qc/7ue51b5WcfJ8YqoRRTBKBWf1y9oRCuWLoEbBJCh4x3nuncWk9xZ9aAKCkBB5icjrj/5BUTY19DcAaOwFWFH15MMtVoAEIIoChUSvlPeUotANaSqEcSo9/qjL4Zz/rZTfz254Cvk1NYCRexxNaSU2U+QCQpgEwpVKpTRNNZ+nEZpFnYEMGPmpENdpxDjJGpqLnQyMkzDoRJrrxTU1OZf5JFRlE+QGCSYsoNSvlefiIXQ2k3G8yYyQeIZPosRlK3N+8/d2AuZABOHrGcAKh9iQ4r5KkBGSyeJ6ufUQezHjj7zt/dZntw1tWnghLbbxwpPZ49zSaKZpl/K3EKhO3sP5RlAYDfzvHtnMALfqLNq/2JonmxBaXoJ0/1F6HYtEC2AAAAAElFTkSuQmCC") no-repeat left center transparent;
    background-size: 100% 100%;







</style> 

<style>

.buttona {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 60px 120px;
    border: 3px solid #7f7ee8;
    border-radius: 41px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74c2b5));
    background: -moz-linear-gradient(top, #f5f5f5, #74c2b5);
    background: linear-gradient(to bottom, #f5f5f5, #74c2b5);
    font: normal normal bold 20px arial;
    color: #1d759e;
    text-decoration: none;
}
.buttona:hover,
.buttona:focus {
    border: 3px solid #a5a4ff;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8be9d9));
    background: -moz-linear-gradient(top, #ffffff, #8be9d9);
    background: linear-gradient(to bottom, #ffffff, #8be9d9);
    color: #1d759e;
    text-decoration: none;
}
.buttona:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74c2b5));
    background: -moz-linear-gradient(top, #939393, #74c2b5);
    background: linear-gradient(to bottom, #939393, #74c2b5);
}
.buttona:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAD70lEQVRIibVWS0xcVRj+/nPPXK5ABYkwUi2daWdSQqnUIkINBVqKaRorXTRNo5uqaYyPjdHGlSa+FsaYaFyZulCsr2K6UNNFeVgNtINGSii2wEAlFCklBaG8Zu7cOb+Ludy5PAYWjX8yc778r/P/3/nPySUAAv+jSHtVyzeqaVH6hVoRASD2NimwoBoA3aMnd5tgfhRESwtjDPX9EFIMZIut6FrMKV0uyl5FdTNnMqMKwDkAKq5IEOH2xGcvpxs7apoyq54uhlia/98/fo3sfyVS0vxpVy8PohCMMQpgkgLl5ULE4GNGHoiccsAEkL0CIHC6UVL70X3H3tpJUgfHLcRuhi2oRF3TvT3CbPr4eRBa+xo78gCMi60YpuAjFcXG9sq3MyuPPrkmmZoUekGxJOmBisxh4qdT5kLOLgEhlctL0Ei7qXWf3dHfGRoCAEnEvozy+rG0YJmu5qZUfGYy5R7W7RuKrRimL56z5guf0TltAwgMTI9Y4LgAAMrebIC5KrirYjbcGRp3ziA+dQu3Gt5rtgqfqgIo9WSRJrj4WZ01AxQ3kXblCzNrW5GA9FgAAL8X8H9w6k5vjxkEl0qA7OpGVNy/b4B9lU/AXACiM6npWpgG8QTSBn42cw8ck1qWN1EQAWDbRebLeMfpgHQ0rmCj7f3WDRUHH1+zE00I49BxXWRkJbPCHgxHGHJF4OyYlVH0WG966YF9qVtwC6fACXEoWiLk/CViXNPr2NfDtmIlRbaYN66paF/IWq43tu+RnvyAADGif3ejPPzCfM69sWQPCmiOPmcgv07YFK3SAQDPg9uEZ2NAX83G8RggJNhcwIm6K0aBNyJ+bNuoygon4PMuiI5v6zG9Xgex0TDMwT9XtQHAPSW1Dv76vM/ce7RdNp5+U52s/9w1GKsdsi1aVi50/07HcXmnZGQmfSkivmz4Sk2N9kGx249SU4R4DBydW3EGjiglAWBo1FDR7Hfw2kvH5V89dWhsPWwh+Uqv0UG2F1q2V0YHO63YSJ9abpe5mxVpHvHdLwXKXxxVDd98r5RS6OoKYjYvw37+GZIZA3NtZx7S/SUWkONKkXhJdd/DUt9UtGIDSF3oWfdjuOCSHHbrjxwBaVIgfD1BUfhyqD9IOBHt//0gqt8oc+cHGCQ0QGgrb/TizHvSxFp3QQBAuDM0zkS/UbjpATF+LcE70do/rIPtKgUA8ACK+s+E7ojRy6+K9k9eTFK02IoLMyNpXw+Tc8hTAOY3fXhx8p93D12IXG2v07eUmriLDwLreqdi8AjZSRQAUd3CAQCHb76++ywIvlUjF68E2yAVBo+pmZyrcFe557wS1S3sHl1xt/g/KqCctLeJzWQAAAAASUVORK5CYII=") no-repeat left center transparent;
    background-size: 100% 100%;
}







}
</style>

<style> 
.buttonb {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 18px;
    border: 4px solid #0b631e;
    border-radius: 83px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74c293));
    background: -moz-linear-gradient(top, #f5f5f5, #74c293);
    background: linear-gradient(to bottom, #f5f5f5, #74c293);
    font: normal normal bold 20px arial;
    color: #238a47;
    text-decoration: none;
}
.buttonb:hover,
.buttonb:focus {
    border: 4px solid #129e30;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8be9b0));
    background: -moz-linear-gradient(top, #ffffff, #8be9b0);
    background: linear-gradient(to bottom, #ffffff, #8be9b0);
    color: #238a47;
    text-decoration: none;
}
.buttonb:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74c293));
    background: -moz-linear-gradient(top, #939393, #74c293);
    background: linear-gradient(to bottom, #939393, #74c293);
}
.buttonb:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAACTUlEQVRIibWWS2rjQBCGPxn7BsHSNooyi2zsvTFZzMIXGJzNPCCnCDlGDmBhGMbJ5Axe6BIDSiKtJOIM2YQsGhNQzcKS0mm1HwlMQUF1UV2l+lWPdoAW6ykAvgCfgSOgW+r/An+AOfAbSDf4qAO0NA6Aa+AFkC38UtoGhp/at55BC/gOPO/g2OTn8u4b52YGZx9wbPKZ7tzRDl+BqQ1Dz/M4Pj7G930A0jQliiIWi4XNHOAH8FPPILDB4rquhGEoSikRESmKQoqiEBERpZSEYSiu666Dy9cDXJtG/X5f8jyvna7jLMuk1+vZglxX6HzCqBbXdSXPc9mVsiyzZfJSIsO5GT0MwxoKHRZdvr29lSiKav1kMrFlcQ6rZqmVnueJUqoBxXK5rOU4jmUwGMjd3V2tU0qJ53lmgDnAva48OTlpQLBcLmU0GkkcxxLHsQyHQ7m5uWnYjcdjM8B9m9f2B8D3fUQEAMdxEBE6nQ4XFxecnp4CEIYhQRAgIrUNwMHBgVmue21bEVdUXQQ4PDxkOp3iOA77+/tWGxu1WQ0ur1KkaYrjOFZjyxe+oSRJTNUjbPjJm6rIlJVStlKdt8oANS0WCy4vLxvpb5NnsxkPDw9mBnNYNUOj0bIse1ejdbvdtY1mHRW9Xk+yLNsK0YZRcYW2D7YOO7PxlFIymUxsXy7AE+Wwq8Z1wWpZ7DSukyQhiiIb5hV9A35Vh/+1cBobrZI/ujKfWC2txiPCtvR93rf0r8o7LZP1f6AHLLRAY16fLXulzSPNZ0th+GoBxT/dLN98eCVyrgAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}


</style> 



<style>
.buttonc {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 18px;
    border: 4px solid #0b631e;
    border-radius: 83px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74c293));
    background: -moz-linear-gradient(top, #f5f5f5, #74c293);
    background: linear-gradient(to bottom, #f5f5f5, #74c293);
    font: normal normal bold 20px arial;
    color: #238a47;
    text-decoration: none;
}
.buttonc:hover,
.buttonc:focus {
    border: 4px solid #129e30;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8be9b0));
    background: -moz-linear-gradient(top, #ffffff, #8be9b0);
    background: linear-gradient(to bottom, #ffffff, #8be9b0);
    color: #238a47;
    text-decoration: none;
}
.buttonc:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74c293));
    background: -moz-linear-gradient(top, #939393, #74c293);
    background: linear-gradient(to bottom, #939393, #74c293);
}
.buttonc:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABXUlEQVRIibXWMU4DMRAF0Ie1JSVClChKxSmQuAAFokKcIxUSVcQBOARwhohbUHIAlAZRRiwU9gbHZLMOCl/60q7X88dj78x4D0E/xrjAGU5wmMbf8IIZHvG6QWPpIGQc4wkLfA1wkeaOC52ldh5BwDU+KoRLfiTbFfEygskGgdtsIbcb5k36xK8wLfevQB5+H6ZJKyB0k0e4HzCENnEI9zhG2zmYYr/CsBb7uENoxNM/rzQc2p4c5xg14n/eVBrVbE+HBpdBTKL/wlkjZmgtui16XvPtZs3YCXyqS6Q8D8rk1GOz2ObQcrQ9z7/QiIXrqEL01GoUNZgTK+K2daeWs5Ac/BdmxESrKcvbcpG0BbGe79rBg6wfjP2tB/TxXSygOgfEZrErB8tynTsYaji1nCj6xq5a5nu28hWsa/oj2zX9h2QTSu6lhzzdu/fO0aWfa8tBmjP3+9rSFloB7TcRr+6cYd3wrQAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}


  </style> 


<style> 
.buttond {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 30px;
    border: 4px solid #0b631e;
    border-radius: 83px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74c293));
    background: -moz-linear-gradient(top, #f5f5f5, #74c293);
    background: linear-gradient(to bottom, #f5f5f5, #74c293);
    font: normal normal bold 20px arial;
    color: #238a47;
    text-decoration: none;
}
.buttond:hover,
.buttond:focus {
    border: 4px solid #129e30;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8be9b0));
    background: -moz-linear-gradient(top, #ffffff, #8be9b0);
    background: linear-gradient(to bottom, #ffffff, #8be9b0);
    color: #238a47;
    text-decoration: none;
}
.buttond:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74c293));
    background: -moz-linear-gradient(top, #939393, #74c293);
    background: linear-gradient(to bottom, #939393, #74c293);
}
.buttond:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADrElEQVRIiYWWz08bVxDHP7NebPxDpSoGVTWRKlQRyZESCpeUSw8oDSdErSi9pL32EIm4FyROidoDinqh0P4BSAipqEEovZC2HJP0Arg9WCqtrDa1ewCjQsQSQ+ydHvZ5vf6RMtKTR2/nzZvvd2beWACLDjL8YB6Ed4AbwDhIGrTffN4D8sAmsCpCYefDbCc3iLnADV40vDY/CMwBUyJiA6gqItLmQNEqyjowm8tk/wj4cQEreAEX1+9bUTdyC/gGkYT4TrxIghepqhdhQz8Gbrvxs+Vfr8/UA3b9qI3zGUGWREgIiqKAEtR96AEwRk8gsmQ54ZnLj770g7aNjRV1I7cEmVMBtHFagb7uGCPJFAPxHgCKzhFb5RLlyomHToPUyZzldP0DLPs5MJzviEgiSMMbkRh3Lo1xPTVEOGQ30XJWq7JR3GUh/4SDitNGl8KVXzLZggw/mLcQvsWrFhMEXOzpY/HqJMnueFtig7JfcZh++pDfjvZNESgmju9U9CPLlOKUiFBfvZE4i1cn6YsmCO53Wv3RBAvvTdLrB+LtI0yJyqAF3BBMKZokTl8a8yNXVZ+aoP738SHb5RIAfd1xptNjTTbG500LGPdgKSgkIzEmUkO+cV1eujVf/+v4X+5u/0h/NOHbTAwM0RuJ0dIq4xZImgDkkWSKcMhuoqGqLp/9/D3PnEOeOYd8vrPJvZFrDMR7fJtwyGY0mWpQ5EnaBu1HBcSjaCDe09ZEtljMXH6fu9s/IcC9kWtcMHbBpku1nAWSDe6VNglSdCH+Ol+MfuA5ir3W0abprPm1gT0RebP+oegcdXxzAL/RXiWllrMKZQvvVfSzv1UucVardqyc/9NPa1W2yqWmfSBvAZtBmOWKw0Zxtw3+efqj4i7l05NWijYtYBWhGqyahfwT9ivOuU1WX/sVh4X8YwT8PZQqsGqJaAFlPQjtwLT/3ovjcynae3HM9NOHHFROWmx0DaTQ9NgBiWDSek2HTgwM0WWFmhJ65tbYKO6ymH/sO0cEVEF4jvJuLpMt+ANneG3+E0SWOtVPbyTGaDJFylRRyTzXBwHOG6Ko8nEuk12Bxjzg7KW9HO6qvqUic14UYqaYUj494YfS7/XDr5podQCzITu6Yty6TSMzvfq1Fbar3shsoatJ6lQ068+B2yE7urI1+anrm9J56L8N3AeZEmmg7CSqVL2EMpvLZP9siyWIwIgFuFfWv7LE1UHgJjAOpIGksSkT+NsCUshl7rgtvizA/Q/IGuZzGeD54wAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}


</style >

<style> 

.buttone {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 70px 297px;
    border: 4px solid #0b0c63;
    border-radius: 27px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#74adc2));
    background: -moz-linear-gradient(top, #f5f5f5, #74adc2);
    background: linear-gradient(to bottom, #f5f5f5, #74adc2);
    font: normal normal bold 27px arial;
    color: #23378a;
    text-decoration: none;
}
.buttone:hover,
.buttone:focus {
    border: 4px solid #373cff;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#8bd0e9));
    background: -moz-linear-gradient(top, #ffffff, #8bd0e9);
    background: linear-gradient(to bottom, #ffffff, #8bd0e9);
    color: #23378a;
    text-decoration: none;
}
.buttone:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#74adc2));
    background: -moz-linear-gradient(top, #939393, #74adc2);
    background: linear-gradient(to bottom, #939393, #74adc2);
}
.buttone:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 40px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEhklEQVRIibWVWWxUZRTHf993t1k7Q6elm5ZCS4sVd0UCjcGiVJaYikICD76QEGOCidFEEp6ICRETHnw0hAcjCSaGSNAImkpKIotYFiuUvdCy2mmhnbV37sz9fJjOMNJCMMaTnOTce+49y//7/ucIQPI/SiG4+wC/+19tDRCAKlEx4VQTBTyS/cGblSKWyr2ka+LFxLh7tuSbSRD9a8jqIsYKUxcjgNIkzrol5eUFX6GDUmWKdw/VsF+L2I5bURbUdwTCxq6jF9Ov+srNO5lkbuT+iuUUzw+0Fy1Cljf6mj0h/X3Nkt/JiS4AZQa09yb9uLotpDfXWa015fq7Hc8HPfdD0fpOnaxsDVR7wvpqwyu3a6YcKASUuojqHvmtJ6yvj8z2N5TGlYB8e2Eo7DHFRQFKgGqqNecDsn5+OOCLGO1mQNuqmeJ3IXEKQXWvftz0axuDNda8ljcqzRIEiqpPJHF9lhzXpdjvC8pr3rBx+9qo84puyc3Xe8YWuFkVuL8bgKytmqThDepG8+nz+09kKLk5BVsAsqLFH4jfsle6jtvhZlV7zlHTi5cX0PwRws+txD9rAUZZFcoZZ/yvc4z1/kCy/wjCsHrMcN1SO3r5zpQJDJ/2sZPKbZW6GJW6OCw18ZPmDZnpkbtbvXXPyOqlm9A8ZSBAuhlcYYAQKKVIXOhmqGsbSL070LSwI362K1vapQaI8lm+XqGJveF67yfxW/bXwadWnUgO/LnTCNWEa9/6DGkFEEIgXYdrO9dhGDp6ZTMAVsVMNG+I5OVDDbnU6HXlpHsoIawEGD6fjCWHMkeHziRSgJu42N2psnZ9ZOE6pOkHQCmwb5wkPTpE7GzXBGEESkHZ3GWYlY24duJDf8vi4rkWO+Ae5fPkEeIjYXienf7qBkhFiZ3ajX39JLFzv5CJR3GSd9FyKeybvajkEEZFI64zTmqgp0JK+VUudWesEKuQrZgRkCqXbbAqZiI0g+zwJaK/7co7pGT5suUcPnKYaM9uAILVjfhaXseMNAAKJ3a7HugvHPJUc6c4EZUCbUYbMzo3Y/rDeL1etmzZwto1awGIPLGIqs7PcZHFGXNv2uTjlHZQTCY0/Wpm9Aa4DkLTMepfpqxpAcN//Ej74nYcxwGgvG09rhkAFPbIACAwQjWD9lBcTgo6kTE/Xq3APnc8RnKgJ08FN0fiyjEA0soikUwCkOo/kq9XQeL8AYRu9FnVcwZLUJgaotCTy/YI3bo6cmgHrp1CZlO42QxVL3RSu+ZLZqzahi9SRy4ZRSmIndmHHb2ENANfxHr3FnjgFgAr0PsfyYxQ7RIndvt7b93TevXSTRiWB1caE+TOc0IJjfiFgwx1bUNoRnewdUnH2Kk9k4nGFBvtseUb+1M3+wbtkSsr4ue6pBISzTsNzfSjnDTpm30M/7qduz3fIHTzmKequTNx4WCSe5uusBkfvsGsytnzpBU4BKK0iLxKfUx6Qp8G57w2abQX5IEQlUrF4g3ET/88N5uItrmZVJXQTFsanj5j2uMH0oPHEw8rcKoOHnmjPYr9N/xDw/yCU35iAAAAAElFTkSuQmCC") no-repeat left center transparent;
    background-size: 100% 100%;
}


</style> 




<style> 
.buttonf {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 42px;
    border: 5px solid #008c13;
    border-radius: 62px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#96d13d));
    background: -moz-linear-gradient(top, #f5f5f5, #96d13d);
    background: linear-gradient(to bottom, #f5f5f5, #96d13d);
    font: normal normal bold 22px arial;
    color: #468f46;
    text-decoration: none;
}
.buttonf:hover,
.buttonf:focus {
    border: 5px solid #00e01e;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#b4fb49));
    background: -moz-linear-gradient(top, #ffffff, #b4fb49);
    background: linear-gradient(to bottom, #ffffff, #b4fb49);
    color: #468f46;
    text-decoration: none;
}
.buttonf:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#96d13d));
    background: -moz-linear-gradient(top, #939393, #96d13d);
    background: linear-gradient(to bottom, #939393, #96d13d);
}
.buttonf:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEY0lEQVRIibWVS0xcVRjH/+fM3Ad37jAPLsxkhgHKUF7SiAPUtobG0DZgm0iMpYnGjRujYmLcKdGNC1w0LlwYd67cuLAbU5hiTEx8V6jEpAKSIu/XDPOg87jcO3OPi+EOA2WwMfFLvtwvJ9/zd865hwCg+B/FAoAAMPa/R6V03QBAalpl2cizG4zhecFuaXYExMVsTM+W8wcenYCWs70NSohyZAkAM5VaSURSuL6TYk8qUBRvvXKW47k4L1nZlQ+b2Su3utjVm23MERAZochKVdzl4+JMRKWKo2uyh+9KbKbChMKlq3kofgc8nTLkGgF1F1xYm0xYU9vadcnNTepZ4+/S2NI9YDjMjwEgdq/QmYnqE6LT6r56sw2WPIfpW8vgqYDqjgrwkhX1511YuZvg0hHtRcnN/apnjQdmXrMA20/MSmzIHr4rE9UnRBfnHvioFY6ACP/ZSugJgumvlsBTEdUdErgKioZn3FidTHCpbe2GrYr/Wc/kFwGw4xAVsWSi+h3RaS0kr60AIQSEAL4uO/RkoQhHBdScsYGXLKg778LqbwlrOqpdqwraPs/EdPUookew9I+2wlErghBSnPHhko6GPidySYLpW0sFXGcKuJTTNsyNRyTDYPM51ZiyHt112cOH0hHtjuji3AOjLaj0i1j9MYWN33dRd8GFxe/jmJlYQ/8HHegZ9gEEuPvFAgCg/SUFVU0SACCXNXwAYBagZvIiltEWOGorAACxhTTuj6/h/vhasRGWBwgFet7wASgUYQDcbRwAgJMsi7k9gxYR2b3CU+WwiJKA2fAmhq4P4a3hYdweG0N2R4fvSSd4O4Wv2w49XsC18ksSDGzZVSe+nY7qaqFzr9CZjmjfmKfFGRBhIgcD/gpvFxC0t+Hc0+cQDAax/mcc4XdnAAYQytA86IJVsIDlSMJTq7ywPZPeNS8U5WXLa1oq/1nwkoLed06BUALGAEKAzFYeX746VUTj9/uxubWBYG8NmvoUeLokJFezCL83CzWRi3kCynMbi5FJ058AoIFuO92azXyipfJvnrroRjqqIbmqwuEX0fmyH4IoIKflMXc7goWfttF4vgYX328AIQzJVRXhkTmocT0mKVx/akszk9PiRdtd1/Ktg0o4ubxXvTOf6ckm9GUwfJ3e0SoffBt11vc64QvZ4Q85EPlDRfugB5W1HJIrKsIjhc5tCn8ltaUdjLp/YYlZCQD1hew0tpAdkKuFH6Lz6V2lxVYZX8hMVTXZGq993F7Ath9VimW/83tHj3zpMQUAY/3eQwPAmJrIGQAQnUvvWjjyXXJNbSw2RXCA5SD5ISyl9nG/ZtMBymmbzIA+R61Y3LHEilroPK7HpAKWyeNiTbt0gkeKpSPas4bOGmwKD2Yw7K6ruDNSimVv+ri4o1L2wfGF7FZetnwKgAUvKUxSeEYtZEf28N1l4h/rRTskTwxVU7MItZAdu1cI/VvH5Sag5TTQbbfysuV12St0nuRXRh//0f8v9j/c1dkU8Fhi1AAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}


</style> 


<style>

.buttong {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 42px;
    border: 4px solid #8c1a00;
    border-radius: 70px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#d96a5b));
    background: -moz-linear-gradient(top, #f5f5f5, #d96a5b);
    background: linear-gradient(to bottom, #f5f5f5, #d96a5b);
    font: normal normal bold 22px arial;
    color: #853535;
    text-decoration: none;
}
.buttong:hover,
.buttong:focus {
    border: 4px solid #e02a00;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ff7f6d));
    background: -moz-linear-gradient(top, #ffffff, #ff7f6d);
    background: linear-gradient(to bottom, #ffffff, #ff7f6d);
    color: #853535;
    text-decoration: none;
}
.buttong:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#d96a5b));
    background: -moz-linear-gradient(top, #939393, #d96a5b);
    background: linear-gradient(to bottom, #939393, #d96a5b);
}
.buttong:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAC2UlEQVRIibVVT0gUURj/vTdvdv7suuq6NiG6bSttxiaVdZNAU8RDh+ioENE/CooOQUiX6FQRFZ67VIdSunQKLx0kgogQFIXVIKSFJVMT193WzXFeB2eW2dmZ3Sz74GM+vvd73//3DQFA8R/JMm54nBf1l7VWNAi+UyFBPH0hHHHFeMnODKhT7lQa1ABlTwBwANxPhJcJqSbkhXfKlRwgwpQ2idBJAvDB2hZ+sS7KGQgXQVK7mdx7pTFRtcTUjc8H99Kw4BsQQFZrKeOPtHY+FevhU629/FnTUR5hCifAZg1lj4/J9aqXHWIKhs0Zuv2Nvk/5leE1Q7+UkIJ4oB1Ei6iCgwMcIIQga+i4vzSH12tpSIRO7xKkwZSen3bYMggAGt7vDyx/znVwA/ARKhPgboEbhxNSENdCrfARrypwvM0t4sVqCgT4pVJ2O2voHwgFGvb5J5ZmcxkAoKJKb8Js4E6xaXOrRPVRpWk1tT4pBVno+I0YKCPV+uZKhs7x7uEXFDL6j9oWuX1lPp8u1l0JiQM7Fb1piwIAsxoSOxEfmXuTrNv4uamZuiiAMwCeA5g3dWfN71MvjKgKC7Ge+MjMq5li8F7voMuMqMumHze5EqbEjtt4VF0b28EIAIgZBQVAmpl8YM3QrwLoBnAIW5NwpJnJ3zOGfhIAmpn8sQJm2bRpcWkWBLgDl8aZ+nEA41UwFpU0uUgqEfI5vomxSCeaRBnpjXX0f31f1JdhmIK0ni/DwGWbUgA0IipxAchFRZWfq9vDo6LKBSAXEZW4lUEVjHMflU+RJkh9MqGzFOAyobOaIPXBMUUVMCWBO5cdGtsCwaW5bAd3n5Nh83vdeUAoEI4HJhaT2YzzrKREVCS38Jcv2LxbUiJ7kw0AMDa4BAD999pcU/CisaGkdbdkXZdNkfUqxoaS23Jgv2sP2O6AAkBAk0azCwU78I+NBzRpNPutULYdqv70/0X+DbowND89VZ27AAAAAElFTkSuQmCC") no-repeat left center transparent;
    background-size: 100% 100%;
}

  </style>





<style> 

.buttonh {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 40px 42px;
    border: 4px solid #892eb0;
    border-radius: 70px;
    background: #f5f5f5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#945ec7));
    background: -moz-linear-gradient(top, #f5f5f5, #945ec7);
    background: linear-gradient(to bottom, #f5f5f5, #945ec7);
    font: normal normal bold 22px arial;
    color: #693a75;
    text-decoration: none;
}
.buttonh:hover,
.buttonh:focus {
    border: 4px solid #db4aff;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#b271ef));
    background: -moz-linear-gradient(top, #ffffff, #b271ef);
    background: linear-gradient(to bottom, #ffffff, #b271ef);
    color: #693a75;
    text-decoration: none;
}
.buttonh:active {
    background: #939393;
    background: -webkit-gradient(linear, left top, left bottom, from(#939393), to(#945ec7));
    background: -moz-linear-gradient(top, #939393, #945ec7);
    background: linear-gradient(to bottom, #939393, #945ec7);
}
.buttonh:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: -3px;
    left: -4px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADkElEQVRIie2UwWtcdRDHP/P7veyuu0m6u2nSmhoTjEKLVNEequ2xN0GkWPWkVfDSnvQgeKrES8SD4EUKerEHz4r+BW3IQSTUgFarYk22aYths+lukre77814eG9flpgQ8eLFgXnDg9/M9zvz+/4G/rf/2gTgQuHKa8CsYQ4UTDFSN8WwLz/rXLzwbwCCNE5XJ0vjYJgp9BXfaGyxuR4+92bu4xnD+pgJ4BAcIh7BYTic+DWQby6Hr//a38GMYZfIGMfbkTjriAxAEghJAMDjxCP4BFRcB+TM5fD8XADgc8NlN+Bx3iMenAdJ3XkwMcSBE8EwMDDtuaCxYTGZaxzn4ig6S8icvDV27WUn8qkEfhgneO8RL4hziHeIS5gigriUvRlmhqmBGaoKsaKxYprGSBumdj4w1RdV3LDEMWKO2EDM4Rw4M0wEcQYiyXCS+smnBxQnIBoraAJiZmUzPRtYbHdxmjJjO8kZpoKIEGrIL61lVreaeHEcLpZ5ZPAhvDjQRBgWp1E16UwVVasFmP5uMZgJopaMxBkmijmh3r3Pt2s/MGCDjBXKxKb8Vl/hVrPGqcoTFHw+BbGsuKn2iC4HproCgElymSqIU0QckSjfN25QkSqnJx6jlCsAsBYeYb72M9cbNzg5fDxRWXonqj0FGMBKYGpLifQsmZJIBhISEkXKdKVKt6XUbQMQvBemShVutpbpdNt4BOu7EzR7LrUAi2vZryUqMUnk58TIIYSdLeJgMDuyFq5zp1NDLGIp/IOpYCKVr/WY92wlALtrWNT3qtPLhpzzHAhy3Nz8iZHSEB4PwFCQp7WxiZkxMjCIxt3dtkRHkFUBuFj8+jYwvtupwkDAfPM6f1qNB4PDjPsjjPoxWjRRM6quTFfj3VKXPtl8fjJlHS/tBdDuKmcOnOBeNMntzh3qeo8RV6XqhxCEMO7slgZQIxuL6S3gmd1OJTNvUXQljuePAtDqtmlHexbOOsgADJ0FHgZOpfvvb9bViK5G+xVNKTEPzMJe1XbYO2+/O3Pt6tyl4gNFfOAJt0KePX3y/Q8/+uC9/XLl1VfeMCNdNf0K60EbbIYbTE8/yqFDo+Tzeer1NRYXFynki70VtU2+L8+AoDI6fLV/y+/EMGCiNH702LHHxw6OHqRQSADa3fZqs7n+Y3/dnXXWG42pfzSihe8Wnr7y+RcvVKpl8gM5mq0m514699VTJ55c2C/3L0yzBFZyuH2AAAAAAElFTkSuQmCC") no-repeat left center transparent;
    background-size: 100% 100%;
}

</style> 


<a class="button" href="/lsapp/public/pages_inside/show">Your Personal Schedule</a>
<a class="buttona" href="/lsapp/public/worksch/show">Your Work Schedule</a>
  <br> 
  <br> 
  <a class="buttonb" href="/lsapp/public/daily_rem/show">Your Daily Reminder</a>
  <a class="buttonc" href="/lsapp/public/weekly_reminder/show">Your Weekly Reminder</a>
  <a class="buttond" href="lsapp/public/monthly_rem/show">Your Monthly Reminder</a> 
<br>
<br>
<a class="buttone" href="/lsapp/public/yearly_reminder/show">Your Yearly Reminder</a>
  <br> 
  <br> 
  <a class="buttonf" href="/lsapp/public/sleep_estimation/show">Sleep Estimation</a>
  <a class="buttong" href="/lsapp/public/calorie_estimation/show">Calorie Estimation</a>
  <a class="buttonh" href="/lsapp/public/exercise_estimation/show">Exercise Estimation</a>


  <br> 
  <br> 
<center>
<h3> Your Posts in Discussion </h3> 

<table class = "table table-striped">
<tr>
<th> Title </th> 
<th> </th> 
<th> </th> 
</tr> 

@foreach($posts as  $post)
<tr>
<th> {{$post->title}}</th> 
<th><a href = "/lsapp/public/posts/{{$post->id }}/edit" class= "btn btn-default"> Edit </a> </th> 
<th> </th> 
</tr> 
@endforeach 
</table> 
</center> 
  <div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/1185241"><span style="color:gray;"></span><br /></a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=Asia%2FDhaka" width="100%" height="140" frameborder="0" seamless></iframe> </div>
  
@stop