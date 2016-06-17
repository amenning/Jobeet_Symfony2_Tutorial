<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b2fac19d7fe51da01dd02ce1174ecbc84d4d2292dc1ec8e5644eca9ffa489e4 extends Twig_Template
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
        $__internal_6a56956da8c91aff0ed98c47501edb9b3523a4a58500a9ea57a93e05f3127e6a = $this->env->getExtension("native_profiler");
        $__internal_6a56956da8c91aff0ed98c47501edb9b3523a4a58500a9ea57a93e05f3127e6a->enter($__internal_6a56956da8c91aff0ed98c47501edb9b3523a4a58500a9ea57a93e05f3127e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a56956da8c91aff0ed98c47501edb9b3523a4a58500a9ea57a93e05f3127e6a->leave($__internal_6a56956da8c91aff0ed98c47501edb9b3523a4a58500a9ea57a93e05f3127e6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2529f2962ca1562add73db75225dfa63ba17703db5cd577b1897d1cbbef2e88 = $this->env->getExtension("native_profiler");
        $__internal_f2529f2962ca1562add73db75225dfa63ba17703db5cd577b1897d1cbbef2e88->enter($__internal_f2529f2962ca1562add73db75225dfa63ba17703db5cd577b1897d1cbbef2e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f2529f2962ca1562add73db75225dfa63ba17703db5cd577b1897d1cbbef2e88->leave($__internal_f2529f2962ca1562add73db75225dfa63ba17703db5cd577b1897d1cbbef2e88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5294bfdc5e502716b09ea69d3816e03631616f794418c7c09a753c60d507ecf8 = $this->env->getExtension("native_profiler");
        $__internal_5294bfdc5e502716b09ea69d3816e03631616f794418c7c09a753c60d507ecf8->enter($__internal_5294bfdc5e502716b09ea69d3816e03631616f794418c7c09a753c60d507ecf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5294bfdc5e502716b09ea69d3816e03631616f794418c7c09a753c60d507ecf8->leave($__internal_5294bfdc5e502716b09ea69d3816e03631616f794418c7c09a753c60d507ecf8_prof);

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
