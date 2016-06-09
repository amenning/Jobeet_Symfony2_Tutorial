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
        $__internal_36139a86e5424152339e60a3d467f4094babcbd78ad62509592276cc54b307be = $this->env->getExtension("native_profiler");
        $__internal_36139a86e5424152339e60a3d467f4094babcbd78ad62509592276cc54b307be->enter($__internal_36139a86e5424152339e60a3d467f4094babcbd78ad62509592276cc54b307be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36139a86e5424152339e60a3d467f4094babcbd78ad62509592276cc54b307be->leave($__internal_36139a86e5424152339e60a3d467f4094babcbd78ad62509592276cc54b307be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40b45803c03428ebe92dd25ef3b9d98dd530289c9f70904dcae668cb86092eb8 = $this->env->getExtension("native_profiler");
        $__internal_40b45803c03428ebe92dd25ef3b9d98dd530289c9f70904dcae668cb86092eb8->enter($__internal_40b45803c03428ebe92dd25ef3b9d98dd530289c9f70904dcae668cb86092eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_40b45803c03428ebe92dd25ef3b9d98dd530289c9f70904dcae668cb86092eb8->leave($__internal_40b45803c03428ebe92dd25ef3b9d98dd530289c9f70904dcae668cb86092eb8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e96f19412b3ef5b9c7206550046a537002e2cf0c449852b6af7d052d5f4b52ae = $this->env->getExtension("native_profiler");
        $__internal_e96f19412b3ef5b9c7206550046a537002e2cf0c449852b6af7d052d5f4b52ae->enter($__internal_e96f19412b3ef5b9c7206550046a537002e2cf0c449852b6af7d052d5f4b52ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e96f19412b3ef5b9c7206550046a537002e2cf0c449852b6af7d052d5f4b52ae->leave($__internal_e96f19412b3ef5b9c7206550046a537002e2cf0c449852b6af7d052d5f4b52ae_prof);

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
