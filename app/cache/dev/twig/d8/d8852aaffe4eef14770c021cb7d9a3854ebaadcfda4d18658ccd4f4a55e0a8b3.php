<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_897720c2dfb2cfdabf84474de3dde93776675f8b73145a4277ccda53b98b3691 = $this->env->getExtension("native_profiler");
        $__internal_897720c2dfb2cfdabf84474de3dde93776675f8b73145a4277ccda53b98b3691->enter($__internal_897720c2dfb2cfdabf84474de3dde93776675f8b73145a4277ccda53b98b3691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897720c2dfb2cfdabf84474de3dde93776675f8b73145a4277ccda53b98b3691->leave($__internal_897720c2dfb2cfdabf84474de3dde93776675f8b73145a4277ccda53b98b3691_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_556e89931d43306fe7eb2ce5e6c8c3064684b301b72e53287d2d8c77735a9120 = $this->env->getExtension("native_profiler");
        $__internal_556e89931d43306fe7eb2ce5e6c8c3064684b301b72e53287d2d8c77735a9120->enter($__internal_556e89931d43306fe7eb2ce5e6c8c3064684b301b72e53287d2d8c77735a9120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_556e89931d43306fe7eb2ce5e6c8c3064684b301b72e53287d2d8c77735a9120->leave($__internal_556e89931d43306fe7eb2ce5e6c8c3064684b301b72e53287d2d8c77735a9120_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b92f5258e430a58ec39906772a17718637cbbb389fea7ef6e66aa75d752beac = $this->env->getExtension("native_profiler");
        $__internal_6b92f5258e430a58ec39906772a17718637cbbb389fea7ef6e66aa75d752beac->enter($__internal_6b92f5258e430a58ec39906772a17718637cbbb389fea7ef6e66aa75d752beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6b92f5258e430a58ec39906772a17718637cbbb389fea7ef6e66aa75d752beac->leave($__internal_6b92f5258e430a58ec39906772a17718637cbbb389fea7ef6e66aa75d752beac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
