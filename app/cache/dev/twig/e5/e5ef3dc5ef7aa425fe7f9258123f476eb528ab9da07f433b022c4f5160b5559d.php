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
        $__internal_24bf407358e77ae7a5ab9ce4da401f998c98b07fb9a053907552232f0a78800c = $this->env->getExtension("native_profiler");
        $__internal_24bf407358e77ae7a5ab9ce4da401f998c98b07fb9a053907552232f0a78800c->enter($__internal_24bf407358e77ae7a5ab9ce4da401f998c98b07fb9a053907552232f0a78800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24bf407358e77ae7a5ab9ce4da401f998c98b07fb9a053907552232f0a78800c->leave($__internal_24bf407358e77ae7a5ab9ce4da401f998c98b07fb9a053907552232f0a78800c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaa91b85c3fa05de328adfb667bd69b8b64737f29eb3f842c41fdfd21445daa8 = $this->env->getExtension("native_profiler");
        $__internal_aaa91b85c3fa05de328adfb667bd69b8b64737f29eb3f842c41fdfd21445daa8->enter($__internal_aaa91b85c3fa05de328adfb667bd69b8b64737f29eb3f842c41fdfd21445daa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aaa91b85c3fa05de328adfb667bd69b8b64737f29eb3f842c41fdfd21445daa8->leave($__internal_aaa91b85c3fa05de328adfb667bd69b8b64737f29eb3f842c41fdfd21445daa8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c89a2e0057e85a2e4408b8301dce452c90aa1e3436eff33a3ca592cb9cfa0e3b = $this->env->getExtension("native_profiler");
        $__internal_c89a2e0057e85a2e4408b8301dce452c90aa1e3436eff33a3ca592cb9cfa0e3b->enter($__internal_c89a2e0057e85a2e4408b8301dce452c90aa1e3436eff33a3ca592cb9cfa0e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c89a2e0057e85a2e4408b8301dce452c90aa1e3436eff33a3ca592cb9cfa0e3b->leave($__internal_c89a2e0057e85a2e4408b8301dce452c90aa1e3436eff33a3ca592cb9cfa0e3b_prof);

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
