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
        $__internal_dd6dc4ef9aa72206aea5ed3abf244932870a3657f3dbccfd76f0fdf396eef177 = $this->env->getExtension("native_profiler");
        $__internal_dd6dc4ef9aa72206aea5ed3abf244932870a3657f3dbccfd76f0fdf396eef177->enter($__internal_dd6dc4ef9aa72206aea5ed3abf244932870a3657f3dbccfd76f0fdf396eef177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6dc4ef9aa72206aea5ed3abf244932870a3657f3dbccfd76f0fdf396eef177->leave($__internal_dd6dc4ef9aa72206aea5ed3abf244932870a3657f3dbccfd76f0fdf396eef177_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2f05d84eeb306f16444c69529d4a41ffa713b59700c0ad836d1d050d4c4463b = $this->env->getExtension("native_profiler");
        $__internal_e2f05d84eeb306f16444c69529d4a41ffa713b59700c0ad836d1d050d4c4463b->enter($__internal_e2f05d84eeb306f16444c69529d4a41ffa713b59700c0ad836d1d050d4c4463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e2f05d84eeb306f16444c69529d4a41ffa713b59700c0ad836d1d050d4c4463b->leave($__internal_e2f05d84eeb306f16444c69529d4a41ffa713b59700c0ad836d1d050d4c4463b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb2cec4ea2a4d01041f4c2efa8e6e8b1ef11fab4ad5c316b044523ff80fcf17c = $this->env->getExtension("native_profiler");
        $__internal_eb2cec4ea2a4d01041f4c2efa8e6e8b1ef11fab4ad5c316b044523ff80fcf17c->enter($__internal_eb2cec4ea2a4d01041f4c2efa8e6e8b1ef11fab4ad5c316b044523ff80fcf17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb2cec4ea2a4d01041f4c2efa8e6e8b1ef11fab4ad5c316b044523ff80fcf17c->leave($__internal_eb2cec4ea2a4d01041f4c2efa8e6e8b1ef11fab4ad5c316b044523ff80fcf17c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_104f127a3f6a8f73cf50e00db6d365e416126ba4ef017f370502ea8c86266d50 = $this->env->getExtension("native_profiler");
        $__internal_104f127a3f6a8f73cf50e00db6d365e416126ba4ef017f370502ea8c86266d50->enter($__internal_104f127a3f6a8f73cf50e00db6d365e416126ba4ef017f370502ea8c86266d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_104f127a3f6a8f73cf50e00db6d365e416126ba4ef017f370502ea8c86266d50->leave($__internal_104f127a3f6a8f73cf50e00db6d365e416126ba4ef017f370502ea8c86266d50_prof);

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
