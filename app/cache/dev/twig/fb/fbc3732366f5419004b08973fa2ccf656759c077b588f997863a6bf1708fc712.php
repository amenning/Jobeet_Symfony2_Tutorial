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
        $__internal_0dfe6d504659b3317dc0b555674decdbeecd70e49fe392ad6dfc257da919c7fa = $this->env->getExtension("native_profiler");
        $__internal_0dfe6d504659b3317dc0b555674decdbeecd70e49fe392ad6dfc257da919c7fa->enter($__internal_0dfe6d504659b3317dc0b555674decdbeecd70e49fe392ad6dfc257da919c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfe6d504659b3317dc0b555674decdbeecd70e49fe392ad6dfc257da919c7fa->leave($__internal_0dfe6d504659b3317dc0b555674decdbeecd70e49fe392ad6dfc257da919c7fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0876e4a6620527ef1abc12fef7bbbf7381f19a9540c30df71c10bef1c9fee59a = $this->env->getExtension("native_profiler");
        $__internal_0876e4a6620527ef1abc12fef7bbbf7381f19a9540c30df71c10bef1c9fee59a->enter($__internal_0876e4a6620527ef1abc12fef7bbbf7381f19a9540c30df71c10bef1c9fee59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0876e4a6620527ef1abc12fef7bbbf7381f19a9540c30df71c10bef1c9fee59a->leave($__internal_0876e4a6620527ef1abc12fef7bbbf7381f19a9540c30df71c10bef1c9fee59a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee18ec97e599ac4f3030f88e484ae4fe085c996a109a1bbb4facafc1f3aef14d = $this->env->getExtension("native_profiler");
        $__internal_ee18ec97e599ac4f3030f88e484ae4fe085c996a109a1bbb4facafc1f3aef14d->enter($__internal_ee18ec97e599ac4f3030f88e484ae4fe085c996a109a1bbb4facafc1f3aef14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee18ec97e599ac4f3030f88e484ae4fe085c996a109a1bbb4facafc1f3aef14d->leave($__internal_ee18ec97e599ac4f3030f88e484ae4fe085c996a109a1bbb4facafc1f3aef14d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2de545ada10d149c173662ac18e0553b4fb964e56da37579471a0997e0c4b025 = $this->env->getExtension("native_profiler");
        $__internal_2de545ada10d149c173662ac18e0553b4fb964e56da37579471a0997e0c4b025->enter($__internal_2de545ada10d149c173662ac18e0553b4fb964e56da37579471a0997e0c4b025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2de545ada10d149c173662ac18e0553b4fb964e56da37579471a0997e0c4b025->leave($__internal_2de545ada10d149c173662ac18e0553b4fb964e56da37579471a0997e0c4b025_prof);

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
