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
        $__internal_f686d2c6b0345a3789407f090a02142ac396163214a1d62ac2b5729f59f0b7e5 = $this->env->getExtension("native_profiler");
        $__internal_f686d2c6b0345a3789407f090a02142ac396163214a1d62ac2b5729f59f0b7e5->enter($__internal_f686d2c6b0345a3789407f090a02142ac396163214a1d62ac2b5729f59f0b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f686d2c6b0345a3789407f090a02142ac396163214a1d62ac2b5729f59f0b7e5->leave($__internal_f686d2c6b0345a3789407f090a02142ac396163214a1d62ac2b5729f59f0b7e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64bd1a883c1c6b3efd58ed082386cbeef31a7be579ea2d3059d7d9356eeb94f5 = $this->env->getExtension("native_profiler");
        $__internal_64bd1a883c1c6b3efd58ed082386cbeef31a7be579ea2d3059d7d9356eeb94f5->enter($__internal_64bd1a883c1c6b3efd58ed082386cbeef31a7be579ea2d3059d7d9356eeb94f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64bd1a883c1c6b3efd58ed082386cbeef31a7be579ea2d3059d7d9356eeb94f5->leave($__internal_64bd1a883c1c6b3efd58ed082386cbeef31a7be579ea2d3059d7d9356eeb94f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14fa2056928de6b420c9650bc8f9b59896ebf81ea062ec62328b2bcb1d08ce14 = $this->env->getExtension("native_profiler");
        $__internal_14fa2056928de6b420c9650bc8f9b59896ebf81ea062ec62328b2bcb1d08ce14->enter($__internal_14fa2056928de6b420c9650bc8f9b59896ebf81ea062ec62328b2bcb1d08ce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14fa2056928de6b420c9650bc8f9b59896ebf81ea062ec62328b2bcb1d08ce14->leave($__internal_14fa2056928de6b420c9650bc8f9b59896ebf81ea062ec62328b2bcb1d08ce14_prof);

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
