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
        $__internal_16b1802228f741cc294ea6da1882edf9c9089b5d55e9547d3c3c20350fb356ba = $this->env->getExtension("native_profiler");
        $__internal_16b1802228f741cc294ea6da1882edf9c9089b5d55e9547d3c3c20350fb356ba->enter($__internal_16b1802228f741cc294ea6da1882edf9c9089b5d55e9547d3c3c20350fb356ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b1802228f741cc294ea6da1882edf9c9089b5d55e9547d3c3c20350fb356ba->leave($__internal_16b1802228f741cc294ea6da1882edf9c9089b5d55e9547d3c3c20350fb356ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e31c5aee3ab7d694e7c93f3a7ae98206cdd5996e561fe7e573a033f66112f02 = $this->env->getExtension("native_profiler");
        $__internal_9e31c5aee3ab7d694e7c93f3a7ae98206cdd5996e561fe7e573a033f66112f02->enter($__internal_9e31c5aee3ab7d694e7c93f3a7ae98206cdd5996e561fe7e573a033f66112f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e31c5aee3ab7d694e7c93f3a7ae98206cdd5996e561fe7e573a033f66112f02->leave($__internal_9e31c5aee3ab7d694e7c93f3a7ae98206cdd5996e561fe7e573a033f66112f02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea34c3e68fd0557063b3e53e1abd47887d43c96180854f2507f4988380ab423e = $this->env->getExtension("native_profiler");
        $__internal_ea34c3e68fd0557063b3e53e1abd47887d43c96180854f2507f4988380ab423e->enter($__internal_ea34c3e68fd0557063b3e53e1abd47887d43c96180854f2507f4988380ab423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea34c3e68fd0557063b3e53e1abd47887d43c96180854f2507f4988380ab423e->leave($__internal_ea34c3e68fd0557063b3e53e1abd47887d43c96180854f2507f4988380ab423e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0d8b14cb0835a3c09838533837d9df69f8c4b64fcf42d4f4f680b2830fa659b = $this->env->getExtension("native_profiler");
        $__internal_b0d8b14cb0835a3c09838533837d9df69f8c4b64fcf42d4f4f680b2830fa659b->enter($__internal_b0d8b14cb0835a3c09838533837d9df69f8c4b64fcf42d4f4f680b2830fa659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b0d8b14cb0835a3c09838533837d9df69f8c4b64fcf42d4f4f680b2830fa659b->leave($__internal_b0d8b14cb0835a3c09838533837d9df69f8c4b64fcf42d4f4f680b2830fa659b_prof);

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
