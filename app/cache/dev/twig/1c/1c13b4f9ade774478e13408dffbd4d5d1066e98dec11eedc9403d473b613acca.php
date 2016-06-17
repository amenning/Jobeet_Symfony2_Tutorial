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
        $__internal_2ab8b392a36b6f847d52f431a0de1e7f6084b93ac21c5dd873d65936c15c07aa = $this->env->getExtension("native_profiler");
        $__internal_2ab8b392a36b6f847d52f431a0de1e7f6084b93ac21c5dd873d65936c15c07aa->enter($__internal_2ab8b392a36b6f847d52f431a0de1e7f6084b93ac21c5dd873d65936c15c07aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab8b392a36b6f847d52f431a0de1e7f6084b93ac21c5dd873d65936c15c07aa->leave($__internal_2ab8b392a36b6f847d52f431a0de1e7f6084b93ac21c5dd873d65936c15c07aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c188c3e1fe14239359512d40b7c23b3aed92781f9ab8e9e5ff78286fd70259d = $this->env->getExtension("native_profiler");
        $__internal_5c188c3e1fe14239359512d40b7c23b3aed92781f9ab8e9e5ff78286fd70259d->enter($__internal_5c188c3e1fe14239359512d40b7c23b3aed92781f9ab8e9e5ff78286fd70259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c188c3e1fe14239359512d40b7c23b3aed92781f9ab8e9e5ff78286fd70259d->leave($__internal_5c188c3e1fe14239359512d40b7c23b3aed92781f9ab8e9e5ff78286fd70259d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b613fd05eedd6edadb1a39f6996df81c9cad602d7815bdf5928e3099daf521fc = $this->env->getExtension("native_profiler");
        $__internal_b613fd05eedd6edadb1a39f6996df81c9cad602d7815bdf5928e3099daf521fc->enter($__internal_b613fd05eedd6edadb1a39f6996df81c9cad602d7815bdf5928e3099daf521fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b613fd05eedd6edadb1a39f6996df81c9cad602d7815bdf5928e3099daf521fc->leave($__internal_b613fd05eedd6edadb1a39f6996df81c9cad602d7815bdf5928e3099daf521fc_prof);

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
