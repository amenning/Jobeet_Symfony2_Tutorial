<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3b047d05f0c9b1ffaacc4214fcf3a52fe5db4259f0c309072fab4c115834280d = $this->env->getExtension("native_profiler");
        $__internal_3b047d05f0c9b1ffaacc4214fcf3a52fe5db4259f0c309072fab4c115834280d->enter($__internal_3b047d05f0c9b1ffaacc4214fcf3a52fe5db4259f0c309072fab4c115834280d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b047d05f0c9b1ffaacc4214fcf3a52fe5db4259f0c309072fab4c115834280d->leave($__internal_3b047d05f0c9b1ffaacc4214fcf3a52fe5db4259f0c309072fab4c115834280d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a28087c98bf370876b4b685980ed1ff31b8398d9879183f7d4130080c30b612 = $this->env->getExtension("native_profiler");
        $__internal_8a28087c98bf370876b4b685980ed1ff31b8398d9879183f7d4130080c30b612->enter($__internal_8a28087c98bf370876b4b685980ed1ff31b8398d9879183f7d4130080c30b612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8a28087c98bf370876b4b685980ed1ff31b8398d9879183f7d4130080c30b612->leave($__internal_8a28087c98bf370876b4b685980ed1ff31b8398d9879183f7d4130080c30b612_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db605bea59e050e4c48b4cd5ee47f276d5f1b1a4c4416b1b9dc4e0b489530f68 = $this->env->getExtension("native_profiler");
        $__internal_db605bea59e050e4c48b4cd5ee47f276d5f1b1a4c4416b1b9dc4e0b489530f68->enter($__internal_db605bea59e050e4c48b4cd5ee47f276d5f1b1a4c4416b1b9dc4e0b489530f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db605bea59e050e4c48b4cd5ee47f276d5f1b1a4c4416b1b9dc4e0b489530f68->leave($__internal_db605bea59e050e4c48b4cd5ee47f276d5f1b1a4c4416b1b9dc4e0b489530f68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
