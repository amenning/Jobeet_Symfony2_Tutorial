<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593ecb9e6a5daf78ffcbceac5900fc175a486a9c7aa68aa87b7d406a9e376eb9 = $this->env->getExtension("native_profiler");
        $__internal_593ecb9e6a5daf78ffcbceac5900fc175a486a9c7aa68aa87b7d406a9e376eb9->enter($__internal_593ecb9e6a5daf78ffcbceac5900fc175a486a9c7aa68aa87b7d406a9e376eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593ecb9e6a5daf78ffcbceac5900fc175a486a9c7aa68aa87b7d406a9e376eb9->leave($__internal_593ecb9e6a5daf78ffcbceac5900fc175a486a9c7aa68aa87b7d406a9e376eb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52553a0e73890662addf75d879e79d609950a336c7448e1de332439bc43b97dd = $this->env->getExtension("native_profiler");
        $__internal_52553a0e73890662addf75d879e79d609950a336c7448e1de332439bc43b97dd->enter($__internal_52553a0e73890662addf75d879e79d609950a336c7448e1de332439bc43b97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52553a0e73890662addf75d879e79d609950a336c7448e1de332439bc43b97dd->leave($__internal_52553a0e73890662addf75d879e79d609950a336c7448e1de332439bc43b97dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff0b94d091bcda671d33549fb1f47d0c76c9c5d0695cc8b4e4c58b663ccaff3c = $this->env->getExtension("native_profiler");
        $__internal_ff0b94d091bcda671d33549fb1f47d0c76c9c5d0695cc8b4e4c58b663ccaff3c->enter($__internal_ff0b94d091bcda671d33549fb1f47d0c76c9c5d0695cc8b4e4c58b663ccaff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff0b94d091bcda671d33549fb1f47d0c76c9c5d0695cc8b4e4c58b663ccaff3c->leave($__internal_ff0b94d091bcda671d33549fb1f47d0c76c9c5d0695cc8b4e4c58b663ccaff3c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e328fb4a20e07fb7ef1bedaacc7723f4ab90b7c38e994f252338cff00d7133 = $this->env->getExtension("native_profiler");
        $__internal_34e328fb4a20e07fb7ef1bedaacc7723f4ab90b7c38e994f252338cff00d7133->enter($__internal_34e328fb4a20e07fb7ef1bedaacc7723f4ab90b7c38e994f252338cff00d7133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_34e328fb4a20e07fb7ef1bedaacc7723f4ab90b7c38e994f252338cff00d7133->leave($__internal_34e328fb4a20e07fb7ef1bedaacc7723f4ab90b7c38e994f252338cff00d7133_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
