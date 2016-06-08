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
        $__internal_f2f3ad6bfa8daff071f43c911b516b2a30098efcf9876f44d6ec045f4fcd16b9 = $this->env->getExtension("native_profiler");
        $__internal_f2f3ad6bfa8daff071f43c911b516b2a30098efcf9876f44d6ec045f4fcd16b9->enter($__internal_f2f3ad6bfa8daff071f43c911b516b2a30098efcf9876f44d6ec045f4fcd16b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f3ad6bfa8daff071f43c911b516b2a30098efcf9876f44d6ec045f4fcd16b9->leave($__internal_f2f3ad6bfa8daff071f43c911b516b2a30098efcf9876f44d6ec045f4fcd16b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07fa4e61eb82dcce809eea575aacf400087cdff6cc8f0e52480a9f66798abf03 = $this->env->getExtension("native_profiler");
        $__internal_07fa4e61eb82dcce809eea575aacf400087cdff6cc8f0e52480a9f66798abf03->enter($__internal_07fa4e61eb82dcce809eea575aacf400087cdff6cc8f0e52480a9f66798abf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_07fa4e61eb82dcce809eea575aacf400087cdff6cc8f0e52480a9f66798abf03->leave($__internal_07fa4e61eb82dcce809eea575aacf400087cdff6cc8f0e52480a9f66798abf03_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eabf8bde7897017fa1d67cfdd2d3763ab363ea2269c7e3a3dea89dba9ad2b2f9 = $this->env->getExtension("native_profiler");
        $__internal_eabf8bde7897017fa1d67cfdd2d3763ab363ea2269c7e3a3dea89dba9ad2b2f9->enter($__internal_eabf8bde7897017fa1d67cfdd2d3763ab363ea2269c7e3a3dea89dba9ad2b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eabf8bde7897017fa1d67cfdd2d3763ab363ea2269c7e3a3dea89dba9ad2b2f9->leave($__internal_eabf8bde7897017fa1d67cfdd2d3763ab363ea2269c7e3a3dea89dba9ad2b2f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_535bbdf136ea1a2e1bf0c9eeee177d928c5e3ef727fa9e60cecab042d099458d = $this->env->getExtension("native_profiler");
        $__internal_535bbdf136ea1a2e1bf0c9eeee177d928c5e3ef727fa9e60cecab042d099458d->enter($__internal_535bbdf136ea1a2e1bf0c9eeee177d928c5e3ef727fa9e60cecab042d099458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_535bbdf136ea1a2e1bf0c9eeee177d928c5e3ef727fa9e60cecab042d099458d->leave($__internal_535bbdf136ea1a2e1bf0c9eeee177d928c5e3ef727fa9e60cecab042d099458d_prof);

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
