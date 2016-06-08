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
        $__internal_cd2f0f4364dad67df36c26aab4b87b98f0d2bd1023e4e70108ae8c9fdf753adb = $this->env->getExtension("native_profiler");
        $__internal_cd2f0f4364dad67df36c26aab4b87b98f0d2bd1023e4e70108ae8c9fdf753adb->enter($__internal_cd2f0f4364dad67df36c26aab4b87b98f0d2bd1023e4e70108ae8c9fdf753adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2f0f4364dad67df36c26aab4b87b98f0d2bd1023e4e70108ae8c9fdf753adb->leave($__internal_cd2f0f4364dad67df36c26aab4b87b98f0d2bd1023e4e70108ae8c9fdf753adb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9fa5660a18d972f5d17aa17eb1e64e79b442764c1d28b53a435e0b730394426 = $this->env->getExtension("native_profiler");
        $__internal_e9fa5660a18d972f5d17aa17eb1e64e79b442764c1d28b53a435e0b730394426->enter($__internal_e9fa5660a18d972f5d17aa17eb1e64e79b442764c1d28b53a435e0b730394426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9fa5660a18d972f5d17aa17eb1e64e79b442764c1d28b53a435e0b730394426->leave($__internal_e9fa5660a18d972f5d17aa17eb1e64e79b442764c1d28b53a435e0b730394426_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c9b642f60e96c31a00ccd9f309d018532b78af2d236166087e6662d085d6e2e = $this->env->getExtension("native_profiler");
        $__internal_4c9b642f60e96c31a00ccd9f309d018532b78af2d236166087e6662d085d6e2e->enter($__internal_4c9b642f60e96c31a00ccd9f309d018532b78af2d236166087e6662d085d6e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c9b642f60e96c31a00ccd9f309d018532b78af2d236166087e6662d085d6e2e->leave($__internal_4c9b642f60e96c31a00ccd9f309d018532b78af2d236166087e6662d085d6e2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e739e9ef236db8c7a90e667e9e2bc25c06cd61c64eec9d744d1475909e4c59 = $this->env->getExtension("native_profiler");
        $__internal_14e739e9ef236db8c7a90e667e9e2bc25c06cd61c64eec9d744d1475909e4c59->enter($__internal_14e739e9ef236db8c7a90e667e9e2bc25c06cd61c64eec9d744d1475909e4c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_14e739e9ef236db8c7a90e667e9e2bc25c06cd61c64eec9d744d1475909e4c59->leave($__internal_14e739e9ef236db8c7a90e667e9e2bc25c06cd61c64eec9d744d1475909e4c59_prof);

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
