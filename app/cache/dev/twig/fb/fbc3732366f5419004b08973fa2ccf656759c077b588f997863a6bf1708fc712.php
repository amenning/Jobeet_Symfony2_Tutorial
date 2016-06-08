<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_118a190dbe1f3a7a5277c408d032ec591ac1a724ab9955565bd9a1323e4d65ff = $this->env->getExtension("native_profiler");
        $__internal_118a190dbe1f3a7a5277c408d032ec591ac1a724ab9955565bd9a1323e4d65ff->enter($__internal_118a190dbe1f3a7a5277c408d032ec591ac1a724ab9955565bd9a1323e4d65ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118a190dbe1f3a7a5277c408d032ec591ac1a724ab9955565bd9a1323e4d65ff->leave($__internal_118a190dbe1f3a7a5277c408d032ec591ac1a724ab9955565bd9a1323e4d65ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_721f5bea9ca6fa585f7c4d0be8c68406effbfdebf5d76fca9646797aa1889928 = $this->env->getExtension("native_profiler");
        $__internal_721f5bea9ca6fa585f7c4d0be8c68406effbfdebf5d76fca9646797aa1889928->enter($__internal_721f5bea9ca6fa585f7c4d0be8c68406effbfdebf5d76fca9646797aa1889928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_721f5bea9ca6fa585f7c4d0be8c68406effbfdebf5d76fca9646797aa1889928->leave($__internal_721f5bea9ca6fa585f7c4d0be8c68406effbfdebf5d76fca9646797aa1889928_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ceacdb030b51ef6f0f9747dea25edadeff7ce1da61db11143071cce78d133cf3 = $this->env->getExtension("native_profiler");
        $__internal_ceacdb030b51ef6f0f9747dea25edadeff7ce1da61db11143071cce78d133cf3->enter($__internal_ceacdb030b51ef6f0f9747dea25edadeff7ce1da61db11143071cce78d133cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ceacdb030b51ef6f0f9747dea25edadeff7ce1da61db11143071cce78d133cf3->leave($__internal_ceacdb030b51ef6f0f9747dea25edadeff7ce1da61db11143071cce78d133cf3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed0bfba8f38e8c85ad15ea1aa7aba9f62129c840a657e1a4a228e1821ae249cd = $this->env->getExtension("native_profiler");
        $__internal_ed0bfba8f38e8c85ad15ea1aa7aba9f62129c840a657e1a4a228e1821ae249cd->enter($__internal_ed0bfba8f38e8c85ad15ea1aa7aba9f62129c840a657e1a4a228e1821ae249cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed0bfba8f38e8c85ad15ea1aa7aba9f62129c840a657e1a4a228e1821ae249cd->leave($__internal_ed0bfba8f38e8c85ad15ea1aa7aba9f62129c840a657e1a4a228e1821ae249cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
