<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_08a54ce4dd6c04cec3c0218d0ab0605f0e8d7fb4264fcc64bbdfe44cb52ef830 = $this->env->getExtension("native_profiler");
        $__internal_08a54ce4dd6c04cec3c0218d0ab0605f0e8d7fb4264fcc64bbdfe44cb52ef830->enter($__internal_08a54ce4dd6c04cec3c0218d0ab0605f0e8d7fb4264fcc64bbdfe44cb52ef830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a54ce4dd6c04cec3c0218d0ab0605f0e8d7fb4264fcc64bbdfe44cb52ef830->leave($__internal_08a54ce4dd6c04cec3c0218d0ab0605f0e8d7fb4264fcc64bbdfe44cb52ef830_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82b831f9b0de2273b55a24706cc42dce2b8e24d798b9f56f58050c7d00bde492 = $this->env->getExtension("native_profiler");
        $__internal_82b831f9b0de2273b55a24706cc42dce2b8e24d798b9f56f58050c7d00bde492->enter($__internal_82b831f9b0de2273b55a24706cc42dce2b8e24d798b9f56f58050c7d00bde492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_82b831f9b0de2273b55a24706cc42dce2b8e24d798b9f56f58050c7d00bde492->leave($__internal_82b831f9b0de2273b55a24706cc42dce2b8e24d798b9f56f58050c7d00bde492_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9652ce871cb23c13adb61f03b410b80d2f7b4f34d4b9e6fd7b77eda584c1d72 = $this->env->getExtension("native_profiler");
        $__internal_e9652ce871cb23c13adb61f03b410b80d2f7b4f34d4b9e6fd7b77eda584c1d72->enter($__internal_e9652ce871cb23c13adb61f03b410b80d2f7b4f34d4b9e6fd7b77eda584c1d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9652ce871cb23c13adb61f03b410b80d2f7b4f34d4b9e6fd7b77eda584c1d72->leave($__internal_e9652ce871cb23c13adb61f03b410b80d2f7b4f34d4b9e6fd7b77eda584c1d72_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb35613ad38fd41fb3b7cb211209e4b19bee54430d63dd1cc22dc3879323f976 = $this->env->getExtension("native_profiler");
        $__internal_bb35613ad38fd41fb3b7cb211209e4b19bee54430d63dd1cc22dc3879323f976->enter($__internal_bb35613ad38fd41fb3b7cb211209e4b19bee54430d63dd1cc22dc3879323f976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bb35613ad38fd41fb3b7cb211209e4b19bee54430d63dd1cc22dc3879323f976->leave($__internal_bb35613ad38fd41fb3b7cb211209e4b19bee54430d63dd1cc22dc3879323f976_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
