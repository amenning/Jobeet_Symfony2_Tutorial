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
        $__internal_de8fcc0ce2d0d3fa69c7ca11688b178de843d52de0c882d5dd0da9826ae332b9 = $this->env->getExtension("native_profiler");
        $__internal_de8fcc0ce2d0d3fa69c7ca11688b178de843d52de0c882d5dd0da9826ae332b9->enter($__internal_de8fcc0ce2d0d3fa69c7ca11688b178de843d52de0c882d5dd0da9826ae332b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8fcc0ce2d0d3fa69c7ca11688b178de843d52de0c882d5dd0da9826ae332b9->leave($__internal_de8fcc0ce2d0d3fa69c7ca11688b178de843d52de0c882d5dd0da9826ae332b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba022d891d9e73dc91efa6ac24afe9d4b2b4a5a1b9bf46627898dd85402bb23a = $this->env->getExtension("native_profiler");
        $__internal_ba022d891d9e73dc91efa6ac24afe9d4b2b4a5a1b9bf46627898dd85402bb23a->enter($__internal_ba022d891d9e73dc91efa6ac24afe9d4b2b4a5a1b9bf46627898dd85402bb23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba022d891d9e73dc91efa6ac24afe9d4b2b4a5a1b9bf46627898dd85402bb23a->leave($__internal_ba022d891d9e73dc91efa6ac24afe9d4b2b4a5a1b9bf46627898dd85402bb23a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0586c1754e13bac176d48f902d55c4aa1b35ca6f754ae43f6c3529e7e1cbb1d6 = $this->env->getExtension("native_profiler");
        $__internal_0586c1754e13bac176d48f902d55c4aa1b35ca6f754ae43f6c3529e7e1cbb1d6->enter($__internal_0586c1754e13bac176d48f902d55c4aa1b35ca6f754ae43f6c3529e7e1cbb1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0586c1754e13bac176d48f902d55c4aa1b35ca6f754ae43f6c3529e7e1cbb1d6->leave($__internal_0586c1754e13bac176d48f902d55c4aa1b35ca6f754ae43f6c3529e7e1cbb1d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_802746026a7079cf3b85eceac4cf0f0cb2b0b6ba1016af14e37c54f6a7b7110c = $this->env->getExtension("native_profiler");
        $__internal_802746026a7079cf3b85eceac4cf0f0cb2b0b6ba1016af14e37c54f6a7b7110c->enter($__internal_802746026a7079cf3b85eceac4cf0f0cb2b0b6ba1016af14e37c54f6a7b7110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_802746026a7079cf3b85eceac4cf0f0cb2b0b6ba1016af14e37c54f6a7b7110c->leave($__internal_802746026a7079cf3b85eceac4cf0f0cb2b0b6ba1016af14e37c54f6a7b7110c_prof);

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
